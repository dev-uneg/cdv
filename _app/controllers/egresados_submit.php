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
$nivelEgreso = egresados_clean((string) ($_POST['nivel_egreso'] ?? ''));
$telefono = egresados_clean((string) ($_POST['telefono'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$trabajaRaw = strtolower(trim((string) ($_POST['trabaja_actualmente'] ?? '')));
$trabajaActualmente = $trabajaRaw === 'si' ? 1 : 0;
$empresa = egresados_clean((string) ($_POST['empresa'] ?? ''));
$cargoActual = egresados_clean((string) ($_POST['cargo_actual'] ?? ''));
$avisoAceptado = isset($_POST['aviso']);

if (
    $nombre === '' || $apellidoPaterno === '' || $apellidoMaterno === '' || $generacion === '' ||
    $nivelEgreso === '' || $telefono === '' || !$avisoAceptado
) {
    egresados_redirect(false, 'Faltan campos obligatorios.');
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
    'nivel_egreso' => $nivelEgreso,
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
