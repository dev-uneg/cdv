<?php
declare(strict_types=1);

function buzon_redirect(bool $ok, string $errorMessage = ''): void
{
    $baseUrl = defined('BASE_URL') ? BASE_URL : '';
    $target = $ok ? '/buzon-del-rector/gracias' : '/buzon-del-rector?error=1';
    if (!$ok && $errorMessage !== '') {
        $target .= '&error_msg=' . rawurlencode($errorMessage);
    }

    header('Location: ' . $baseUrl . $target, true, 302);
    exit;
}

function buzon_clean(string $value): string
{
    return trim(str_replace(["\r", "\n"], ' ', $value));
}

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
    buzon_redirect(false, 'Metodo no permitido.');
}

$nombre = buzon_clean((string) ($_POST['nombre'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$telefono = buzon_clean((string) ($_POST['telefono'] ?? ''));
$relacion = buzon_clean((string) ($_POST['relacion'] ?? ''));
$asunto = buzon_clean((string) ($_POST['asunto'] ?? ''));
$mensaje = trim((string) ($_POST['mensaje'] ?? ''));
$avisoAceptado = isset($_POST['aviso']);

if ($nombre === '' || $email === '' || $relacion === '' || $asunto === '' || $mensaje === '' || !$avisoAceptado) {
    buzon_redirect(false, 'Faltan campos obligatorios.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    buzon_redirect(false, 'Correo electronico invalido.');
}

$to = 'gabriel.riancho@uneg.edu.mx,elizabeth.cisneros@uneg.edu.mx';
$subject = '[Buzon del Rector] ' . $asunto;

$domain = (string) ($_SERVER['HTTP_HOST'] ?? 'coldelvalle.edu.mx');
$domain = preg_replace('/[^a-zA-Z0-9.\-]/', '', $domain) ?: 'coldelvalle.edu.mx';
$fromEmail = 'no-reply@' . $domain;

$bodyLines = [
    'Nuevo mensaje desde el Buzon del Rector',
    '',
    'Nombre: ' . $nombre,
    'Correo: ' . $email,
    'Telefono: ' . ($telefono !== '' ? $telefono : 'No proporcionado'),
    'Relacion con el colegio: ' . $relacion,
    'Asunto: ' . $asunto,
    '',
    'Mensaje:',
    $mensaje,
];
$body = implode("\n", $bodyLines);

$headers = [
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8',
    'From: Colegio del Valle <' . $fromEmail . '>',
    'Reply-To: ' . $email,
    'X-Mailer: PHP/' . phpversion(),
];

$sent = @mail($to, $subject, $body, implode("\r\n", $headers));
if (!$sent) {
    buzon_redirect(false, 'No se pudo enviar tu mensaje. Intenta nuevamente en unos minutos.');
}

buzon_redirect(true);
