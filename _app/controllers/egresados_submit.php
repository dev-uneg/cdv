<?php
declare(strict_types=1);

require_once __DIR__ . '/../helpers/leads_db.php';

function egresados_redirect(bool $ok, string $errorMessage = ''): void
{
    $baseUrl = defined('BASE_URL') ? BASE_URL : '';
    $target = $ok ? '/dejanos-saber-de-ti/gracias' : '/dejanos-saber-de-ti?error=1';
    if (!$ok && $errorMessage !== '') {
        $target .= '&error_msg=' . rawurlencode($errorMessage);
    }
    header('Location: ' . $baseUrl . $target, true, 302);
    exit;
}

function egresados_clean(string $value): string
{
    return trim(str_replace(["\r", "\n"], ' ', $value));
}

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
    egresados_redirect(false, 'Metodo no permitido.');
}

$nombre = egresados_clean((string) ($_POST['nombre'] ?? ''));
$apellidoPaterno = egresados_clean((string) ($_POST['apellido_paterno'] ?? ''));
$apellidoMaterno = egresados_clean((string) ($_POST['apellido_materno'] ?? ''));
$generacion = egresados_clean((string) ($_POST['generacion'] ?? ''));
$anioIngreso = (int) ($_POST['anio_ingreso'] ?? 0);
$anioEgreso = (int) ($_POST['anio_egreso'] ?? 0);
$nivelEgreso = egresados_clean((string) ($_POST['nivel_egreso'] ?? ''));
$carreraEgreso = egresados_clean((string) ($_POST['carrera_egreso'] ?? ''));
$telefono = egresados_clean((string) ($_POST['telefono'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$trabajaRaw = strtolower(trim((string) ($_POST['trabaja_actualmente'] ?? '')));
$trabajaActualmente = $trabajaRaw === 'si' ? 1 : 0;
$empresa = egresados_clean((string) ($_POST['empresa'] ?? ''));
$cargoActual = egresados_clean((string) ($_POST['cargo_actual'] ?? ''));
$avisoAceptado = isset($_POST['aviso']);

$currentYear = (int) date('Y') + 1;
if (
    $nombre === '' || $apellidoPaterno === '' || $apellidoMaterno === '' || $generacion === '' ||
    $anioIngreso < 1950 || $anioIngreso > $currentYear ||
    $anioEgreso < 1950 || $anioEgreso > $currentYear ||
    $nivelEgreso === '' || $carreraEgreso === '' || $telefono === '' || !$avisoAceptado
) {
    egresados_redirect(false, 'Faltan campos obligatorios.');
}

if ($anioIngreso > $anioEgreso) {
    egresados_redirect(false, 'El año de ingreso no puede ser mayor al año de egreso.');
}

if (!in_array($trabajaRaw, ['si', 'no'], true)) {
    egresados_redirect(false, 'Selecciona si actualmente estás trabajando.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    egresados_redirect(false, 'Correo electrónico inválido.');
}

if ($trabajaActualmente === 1 && ($empresa === '' || $cargoActual === '')) {
    egresados_redirect(false, 'Completa empresa y cargo actual.');
}

if ($trabajaActualmente === 0) {
    if ($empresa === '') {
        $empresa = 'No aplica';
    }
    if ($cargoActual === '') {
        $cargoActual = 'No aplica';
    }
}

$saved = egresados_db_insert([
    'nombre' => $nombre,
    'apellido_paterno' => $apellidoPaterno,
    'apellido_materno' => $apellidoMaterno,
    'generacion' => $generacion,
    'anio_ingreso' => $anioIngreso,
    'anio_egreso' => $anioEgreso,
    'nivel_egreso' => $nivelEgreso,
    'carrera_egreso' => $carreraEgreso,
    'telefono' => $telefono,
    'email' => $email,
    'trabaja_actualmente' => $trabajaActualmente,
    'empresa' => $empresa,
    'cargo_actual' => $cargoActual,
    'aviso_aceptado' => $avisoAceptado,
    'ip' => $_SERVER['REMOTE_ADDR'] ?? null,
    'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? null,
    'created_at' => date('c'),
]);

if (!$saved) {
    egresados_redirect(false, 'No se pudo guardar tu registro.');
}

egresados_redirect(true);
