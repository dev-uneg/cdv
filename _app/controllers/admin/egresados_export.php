<?php
declare(strict_types=1);

session_start();
require __DIR__ . '/../../helpers/admin_auth.php';
require __DIR__ . '/../../helpers/leads_db.php';

admin_require_auth();

$dateFrom = trim((string) ($_GET['from'] ?? ''));
$dateTo = trim((string) ($_GET['to'] ?? ''));

if ($dateFrom === '' && $dateTo === '') {
    $base = admin_base_path();
    header('Location: ' . $base . '/admin/egresados', true, 302);
    exit;
}

try {
    $pdo = leads_db();
    $where = [];
    $params = [];
    if ($dateFrom !== '') {
        $where[] = 'created_at >= :from';
        $params[':from'] = $dateFrom . ' 00:00:00';
    }
    if ($dateTo !== '') {
        $where[] = 'created_at <= :to';
        $params[':to'] = $dateTo . ' 23:59:59';
    }
    $whereSql = $where ? (' WHERE ' . implode(' AND ', $where)) : '';
    $stmt = $pdo->prepare('SELECT * FROM egresados_registros' . $whereSql . ' ORDER BY created_at DESC');
    $stmt->execute($params);
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Throwable $e) {
    $rows = [];
}

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename="egresados_cdv_filtrado.csv"');

$out = fopen('php://output', 'w');
fputcsv($out, [
    'id',
    'created_at',
    'nombre',
    'apellido_paterno',
    'apellido_materno',
    'generacion',
    'anio_ingreso',
    'anio_egreso',
    'nivel_egreso',
    'carrera_egreso',
    'telefono',
    'email',
    'trabaja_actualmente',
    'empresa',
    'cargo_actual',
    'aviso_aceptado',
]);

foreach ($rows as $row) {
    fputcsv($out, [
        $row['id'] ?? '',
        $row['created_at'] ?? '',
        $row['nombre'] ?? '',
        $row['apellido_paterno'] ?? '',
        $row['apellido_materno'] ?? '',
        $row['generacion'] ?? '',
        $row['anio_ingreso'] ?? '',
        $row['anio_egreso'] ?? '',
        $row['nivel_egreso'] ?? '',
        $row['carrera_egreso'] ?? '',
        $row['telefono'] ?? '',
        $row['email'] ?? '',
        (isset($row['trabaja_actualmente']) && (int) $row['trabaja_actualmente'] === 1) ? 'Si' : 'No',
        $row['empresa'] ?? '',
        $row['cargo_actual'] ?? '',
        $row['aviso_aceptado'] ?? '',
    ]);
}

fclose($out);
exit;
