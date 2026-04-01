<?php
declare(strict_types=1);

session_start();
require __DIR__ . '/../../helpers/admin_auth.php';
require __DIR__ . '/../../helpers/leads_db.php';

admin_require_auth();

$base = admin_base_path();
$dbError = '';

$tz = new DateTimeZone('America/Mexico_City');
$ym = trim((string) ($_GET['ym'] ?? ''));
if (!preg_match('/^\d{4}-\d{2}$/', $ym)) {
    $ym = (new DateTimeImmutable('now', $tz))->format('Y-m');
}

$monthStart = DateTimeImmutable::createFromFormat('Y-m-d H:i:s', $ym . '-01 00:00:00', $tz);
if (!$monthStart instanceof DateTimeImmutable) {
    $monthStart = new DateTimeImmutable('first day of this month 00:00:00', $tz);
}
$monthEnd = $monthStart->modify('last day of this month')->setTime(23, 59, 59);
$prevStart = $monthStart->modify('-1 month');
$prevEnd = $prevStart->modify('last day of this month')->setTime(23, 59, 59);
$monthStartDate = $monthStart->format('Y-m-d');
$monthEndDate = $monthEnd->format('Y-m-d');
$prevStartDate = $prevStart->format('Y-m-d');
$prevEndDate = $prevEnd->format('Y-m-d');

$monthNames = [
    1 => 'enero', 2 => 'febrero', 3 => 'marzo', 4 => 'abril', 5 => 'mayo', 6 => 'junio',
    7 => 'julio', 8 => 'agosto', 9 => 'septiembre', 10 => 'octubre', 11 => 'noviembre', 12 => 'diciembre',
];
$monthLabel = ucfirst(($monthNames[(int) $monthStart->format('n')] ?? 'Mes') . ' ' . $monthStart->format('Y'));
$periodLabel = $monthStart->format('d/m/Y') . ' - ' . $monthEnd->format('d/m/Y');
$monthSlug = strtolower(($monthNames[(int) $monthStart->format('n')] ?? 'mes') . '-' . $monthStart->format('Y'));

$pageSpeedSnapshot = null;
$pageSpeedMessage = '';
$pageSpeedFile = __DIR__ . '/../../data/reports/pagespeed/' . $monthSlug . '.json';
if (is_file($pageSpeedFile)) {
    $rawSnapshot = (string) file_get_contents($pageSpeedFile);
    $decodedSnapshot = json_decode($rawSnapshot, true);
    if (is_array($decodedSnapshot)) {
        $pageSpeedSnapshot = $decodedSnapshot;
    } else {
        $pageSpeedMessage = 'No se pudo leer la captura de PageSpeed de este periodo.';
    }
} else {
    $pageSpeedMessage = 'Sin captura de PageSpeed para este periodo.';
}

$summary = [
    'total_leads' => 0,
    'prev_total_leads' => 0,
    'growth_pct' => null,
    'pipedrive_ok' => 0,
    'pipedrive_failed' => 0,
    'delivery_pct' => 0.0,
    'without_page_path' => 0,
    'whatsapp_clicks' => 0,
];
$dailyLabels = [];
$dailyValues = [];
$interestLabels = [];
$interestValues = [];
$statusLabels = ['Pipedrive OK', 'Pipedrive error'];
$statusValues = [0, 0];
$topPages = [];
$whatsDailyLabels = [];
$whatsDailyValues = [];
$whatsTopPages = [];

try {
    $pdo = leads_db();
    $countSql = 'SELECT COUNT(*) FROM contacto_leads WHERE created_day BETWEEN :from_day AND :to_day';

    $currentStmt = $pdo->prepare($countSql);
    $currentStmt->execute([
        ':from_day' => $monthStartDate,
        ':to_day' => $monthEndDate,
    ]);
    $summary['total_leads'] = (int) $currentStmt->fetchColumn();

    $prevStmt = $pdo->prepare($countSql);
    $prevStmt->execute([
        ':from_day' => $prevStartDate,
        ':to_day' => $prevEndDate,
    ]);
    $summary['prev_total_leads'] = (int) $prevStmt->fetchColumn();

    if ($summary['prev_total_leads'] > 0) {
        $summary['growth_pct'] = (($summary['total_leads'] - $summary['prev_total_leads']) / $summary['prev_total_leads']) * 100;
    }

    $statusStmt = $pdo->prepare('SELECT status, COUNT(*) AS total FROM contacto_leads WHERE created_day BETWEEN :from_day AND :to_day GROUP BY status');
    $statusStmt->execute([
        ':from_day' => $monthStartDate,
        ':to_day' => $monthEndDate,
    ]);
    foreach ($statusStmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
        $status = (string) ($row['status'] ?? '');
        $total = (int) ($row['total'] ?? 0);
        if ($status === 'pipedrive_ok') {
            $summary['pipedrive_ok'] = $total;
            $statusValues[0] = $total;
        } elseif ($status === 'pipedrive_failed') {
            $summary['pipedrive_failed'] = $total;
            $statusValues[1] = $total;
        }
    }

    $summary['delivery_pct'] = $summary['total_leads'] > 0
        ? ($summary['pipedrive_ok'] / $summary['total_leads']) * 100
        : 0.0;

    $withoutPageStmt = $pdo->prepare(
        "SELECT COUNT(*)
         FROM contacto_leads
         WHERE created_day BETWEEN :from_day AND :to_day
           AND (page_path IS NULL OR page_path = '')"
    );
    $withoutPageStmt->execute([
        ':from_day' => $monthStartDate,
        ':to_day' => $monthEndDate,
    ]);
    $summary['without_page_path'] = (int) $withoutPageStmt->fetchColumn();

    $dailyStmt = $pdo->prepare(
        'SELECT created_day AS day_key, COUNT(*) AS total
         FROM contacto_leads
         WHERE created_day BETWEEN :from_day AND :to_day
         GROUP BY created_day
         ORDER BY day_key ASC'
    );
    $dailyStmt->execute([
        ':from_day' => $monthStartDate,
        ':to_day' => $monthEndDate,
    ]);
    $dailyMap = [];
    foreach ($dailyStmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
        $dailyMap[(string) ($row['day_key'] ?? '')] = (int) ($row['total'] ?? 0);
    }
    $cursor = $monthStart;
    while ($cursor <= $monthEnd) {
        $key = $cursor->format('Y-m-d');
        $dailyLabels[] = $cursor->format('d M');
        $dailyValues[] = $dailyMap[$key] ?? 0;
        $cursor = $cursor->modify('+1 day');
    }

    $interestStmt = $pdo->prepare(
        "SELECT
            interest AS raw_label,
            COUNT(*) AS total
         FROM contacto_leads
         WHERE created_day BETWEEN :from_day AND :to_day
         GROUP BY interest
         ORDER BY total DESC
         LIMIT 8"
    );
    $interestStmt->execute([
        ':from_day' => $monthStartDate,
        ':to_day' => $monthEndDate,
    ]);
    foreach ($interestStmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
        $rawLabel = (string) ($row['raw_label'] ?? '');
        $interestLabels[] = trim($rawLabel) !== '' ? $rawLabel : 'Sin especificar';
        $interestValues[] = (int) ($row['total'] ?? 0);
    }

    $pagesStmt = $pdo->prepare(
        "SELECT
            page_path AS raw_label,
            COUNT(*) AS total
         FROM contacto_leads
         WHERE created_day BETWEEN :from_day AND :to_day
         GROUP BY page_path
         ORDER BY total DESC
         LIMIT 10"
    );
    $pagesStmt->execute([
        ':from_day' => $monthStartDate,
        ':to_day' => $monthEndDate,
    ]);
    foreach ($pagesStmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
        $rawLabel = (string) ($row['raw_label'] ?? '');
        $topPages[] = [
            'label' => $rawLabel !== '' ? $rawLabel : '(sin página)',
            'total' => (int) ($row['total'] ?? 0),
        ];
    }

    $whatsCountStmt = $pdo->prepare(
        'SELECT COUNT(*) FROM whatsapp_clicks WHERE created_day BETWEEN :from_day AND :to_day'
    );
    $whatsCountStmt->execute([
        ':from_day' => $monthStartDate,
        ':to_day' => $monthEndDate,
    ]);
    $summary['whatsapp_clicks'] = (int) $whatsCountStmt->fetchColumn();

    $whatsDailyStmt = $pdo->prepare(
        'SELECT created_day AS day_key, COUNT(*) AS total
         FROM whatsapp_clicks
         WHERE created_day BETWEEN :from_day AND :to_day
         GROUP BY created_day
         ORDER BY day_key ASC'
    );
    $whatsDailyStmt->execute([
        ':from_day' => $monthStartDate,
        ':to_day' => $monthEndDate,
    ]);

    $whatsDailyMap = [];
    foreach ($whatsDailyStmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
        $whatsDailyMap[(string) ($row['day_key'] ?? '')] = (int) ($row['total'] ?? 0);
    }

    $whatsCursor = $monthStart;
    while ($whatsCursor <= $monthEnd) {
        $whatsKey = $whatsCursor->format('Y-m-d');
        $whatsDailyLabels[] = $whatsCursor->format('d M');
        $whatsDailyValues[] = $whatsDailyMap[$whatsKey] ?? 0;
        $whatsCursor = $whatsCursor->modify('+1 day');
    }

    $whatsTopPagesStmt = $pdo->prepare(
        "SELECT
            page_path AS raw_label,
            COUNT(*) AS total
         FROM whatsapp_clicks
         WHERE created_day BETWEEN :from_day AND :to_day
         GROUP BY page_path
         ORDER BY total DESC
         LIMIT 8"
    );
    $whatsTopPagesStmt->execute([
        ':from_day' => $monthStartDate,
        ':to_day' => $monthEndDate,
    ]);
    foreach ($whatsTopPagesStmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
        $rawLabel = (string) ($row['raw_label'] ?? '');
        $whatsTopPages[] = [
            'label' => $rawLabel !== '' ? $rawLabel : '(sin página)',
            'total' => (int) ($row['total'] ?? 0),
        ];
    }
} catch (Throwable $e) {
    $dbError = 'No se pudo construir el reporte con datos de la base de datos.';
}

require __DIR__ . '/../../pages/admin/reports/cdv-mensual.php';
