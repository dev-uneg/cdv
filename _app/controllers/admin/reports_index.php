<?php
declare(strict_types=1);

session_start();
require __DIR__ . '/../../helpers/admin_auth.php';
require __DIR__ . '/../../helpers/leads_db.php';

admin_require_auth();

$base = admin_base_path();
$dbError = '';
$rows = [];
$tz = new DateTimeZone('America/Mexico_City');

try {
    $pdo = leads_db();
    $monthRows = $pdo->query(
        "SELECT
            DATE_FORMAT(created_at, '%Y-%m') AS ym,
            DATE_FORMAT(created_at, '%Y-%m-01') AS month_start,
            COUNT(*) AS leads_total
         FROM contacto_leads
         GROUP BY ym, month_start
         ORDER BY ym DESC"
    )->fetchAll(PDO::FETCH_ASSOC);

    $monthNames = [
        1 => 'enero', 2 => 'febrero', 3 => 'marzo', 4 => 'abril', 5 => 'mayo', 6 => 'junio',
        7 => 'julio', 8 => 'agosto', 9 => 'septiembre', 10 => 'octubre', 11 => 'noviembre', 12 => 'diciembre',
    ];
    $currentYm = (new DateTimeImmutable('now', $tz))->format('Y-m');

    foreach ($monthRows as $row) {
        $ym = (string) ($row['ym'] ?? '');
        if (!preg_match('/^\d{4}-\d{2}$/', $ym)) {
            continue;
        }
        $monthDate = DateTimeImmutable::createFromFormat('Y-m-d', (string) ($row['month_start'] ?? ''), $tz);
        $monthLabel = $ym;
        if ($monthDate instanceof DateTimeImmutable) {
            $monthLabel = ucfirst(($monthNames[(int) $monthDate->format('n')] ?? '') . ' ' . $monthDate->format('Y'));
        }

        $rows[] = [
            'name' => 'Reporte Mensual de Performance Web y CRO (CDV)',
            'period' => $monthLabel,
            'ym' => $ym,
            'leads' => (int) ($row['leads_total'] ?? 0),
            'status' => $ym === $currentYm ? 'En progreso' : 'Cerrado',
        ];
    }
} catch (Throwable $e) {
    $dbError = 'No se pudo cargar el listado de reportes.';
}

require __DIR__ . '/../../pages/admin/reports/index.php';
