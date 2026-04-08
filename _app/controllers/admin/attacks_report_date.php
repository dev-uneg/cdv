<?php
declare(strict_types=1);

session_start();
require __DIR__ . '/../../helpers/admin_auth.php';

admin_require_auth();

$base = admin_base_path();
$reportsDir = __DIR__ . '/../../pages/admin/attacks';
$availableReports = [];

/**
 * Build a human-friendly static report title from filename slug.
 */
function attacks_report_pretty_title(string $slug): string
{
    if (preg_match('/^report-(\d{4})-(\d{2})-(\d{2})$/', $slug, $m)) {
        $year = (int) $m[1];
        $month = (int) $m[2];
        $day = (int) $m[3];
        $monthNames = [
            1 => 'enero', 2 => 'febrero', 3 => 'marzo', 4 => 'abril', 5 => 'mayo', 6 => 'junio',
            7 => 'julio', 8 => 'agosto', 9 => 'septiembre', 10 => 'octubre', 11 => 'noviembre', 12 => 'diciembre',
        ];
        $monthLabel = $monthNames[$month] ?? (string) $month;
        return sprintf('Reporte Estático del Incidente · %02d %s %d', $day, $monthLabel, $year);
    }

    $label = str_replace('report-', '', $slug);
    $label = str_replace('-', ' ', $label);
    $label = trim($label);
    if ($label === '') {
        return 'Reporte Estático';
    }

    return 'Reporte Estático · ' . ucfirst($label);
}

$reportFileInput = trim((string) ($_GET['report_file'] ?? ''));
if ($reportFileInput !== '') {
    $safeSlug = strtolower($reportFileInput);
    $safeSlug = preg_replace('/[^a-z0-9\-]/', '', $safeSlug) ?? '';
    if ($safeSlug !== '' && str_starts_with($safeSlug, 'report-')) {
        $targetFile = $reportsDir . '/' . $safeSlug . '.php';
        if (is_file($targetFile)) {
            require $targetFile;
            exit;
        }
    }
}

if (is_dir($reportsDir)) {
    $reportFiles = glob($reportsDir . '/report-*.php');
    if (is_array($reportFiles)) {
        sort($reportFiles);
        foreach ($reportFiles as $fullPath) {
            $fileName = basename((string) $fullPath);
            if ($fileName === 'report-fecha.php') {
                continue;
            }

            $slug = substr($fileName, 0, -4);
            $updatedAt = date('Y-m-d H:i:s', (int) filemtime($fullPath));
            $title = attacks_report_pretty_title($slug);

            $availableReports[] = [
                'slug' => $slug,
                'file' => $fileName,
                'title' => $title,
                'updated_at' => $updatedAt,
                'url' => $base . '/admin/attacks/report-fecha?report_file=' . rawurlencode($slug),
            ];
        }
    }
}

require __DIR__ . '/../../pages/admin/attacks/report-fecha.php';
