<?php
declare(strict_types=1);

session_start();
require __DIR__ . '/../../helpers/admin_auth.php';
require __DIR__ . '/../../helpers/leads_db.php';

admin_require_auth();

$base = admin_base_path();
$dbError = '';
$contactoCount = 0;
$buzonCount = 0;

try {
    $pdo = leads_db();
    $contactoCount = (int) $pdo->query('SELECT COUNT(*) FROM contacto_leads')->fetchColumn();
    $buzonCount = (int) $pdo->query('SELECT COUNT(*) FROM buzon_rector_messages')->fetchColumn();
} catch (Throwable $e) {
    $dbError = 'No se pudo conectar a la base de datos. Configura _app/config/db.local.php o variables de entorno DB_.';
}

require __DIR__ . '/../../pages/admin/panel.php';
