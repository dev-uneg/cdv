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
$reportsCount = 0;
$todaySuspiciousClicks = 0;
$daysWithSuspiciousClicks = 0;
$attacksWarning = '';
$attackReportsCount = 0;

try {
    $pdo = leads_db();
    $contactoCount = (int) $pdo->query('SELECT COUNT(*) FROM contacto_leads')->fetchColumn();
    $buzonCount = (int) $pdo->query('SELECT COUNT(*) FROM buzon_rector_messages')->fetchColumn();
    $reportsCount = (int) $pdo->query("SELECT COUNT(DISTINCT DATE_FORMAT(created_at, '%Y-%m')) FROM contacto_leads")->fetchColumn();
} catch (Throwable $e) {
    $dbError = 'No se pudo conectar a la base de datos. Configura _app/config/db.local.php o variables de entorno DB_.';
}

if ($dbError === '') {
    $reportsDir = __DIR__ . '/../../pages/admin/attacks';
    if (is_dir($reportsDir)) {
        $reportFiles = glob($reportsDir . '/report-*.php');
        if (is_array($reportFiles)) {
            foreach ($reportFiles as $file) {
                if (basename((string) $file) === 'report-fecha.php') {
                    continue;
                }
                $attackReportsCount++;
            }
        }
    }
    $todaySuspiciousClicks = $attackReportsCount;
    $daysWithSuspiciousClicks = $attackReportsCount;
}

require __DIR__ . '/../../pages/admin/panel.php';
