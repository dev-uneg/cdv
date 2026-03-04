<?php
declare(strict_types=1);

use PHPMailer\PHPMailer\Exception as PHPMailerException;
use PHPMailer\PHPMailer\PHPMailer;

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

$smtpConfig = [];
$smtpConfigPath = __DIR__ . '/../config/smtp.local.php';
if (file_exists($smtpConfigPath)) {
    $smtpConfig = require $smtpConfigPath;
}

$smtpHost = (string) ($smtpConfig['host'] ?? getenv('SMTP_HOST') ?? 'smtp.gmail.com');
$smtpPort = (int) ($smtpConfig['port'] ?? getenv('SMTP_PORT') ?? 587);
$smtpEncryption = (string) ($smtpConfig['encryption'] ?? getenv('SMTP_ENCRYPTION') ?? PHPMailer::ENCRYPTION_STARTTLS);
$smtpUser = (string) ($smtpConfig['username'] ?? getenv('SMTP_USERNAME') ?? 'webs.delvalle@gmail.com');
$smtpPassword = (string) ($smtpConfig['password'] ?? getenv('SMTP_PASSWORD') ?? '');
$smtpFromEmail = (string) ($smtpConfig['from_email'] ?? getenv('SMTP_FROM_EMAIL') ?? $smtpUser);
$smtpFromName = (string) ($smtpConfig['from_name'] ?? getenv('SMTP_FROM_NAME') ?? 'Colegio del Valle');

if ($smtpUser === '' || $smtpPassword === '' || $smtpFromEmail === '') {
    buzon_redirect(false, 'Falta configurar SMTP para el envio del buzon.');
}

$recipients = $smtpConfig['buzon_rector_recipients'] ?? [];
if (!is_array($recipients)) {
    $recipients = [];
}

$validRecipients = [];
foreach ($recipients as $recipient) {
    $recipientEmail = trim((string) $recipient);
    if ($recipientEmail !== '' && filter_var($recipientEmail, FILTER_VALIDATE_EMAIL)) {
        $validRecipients[] = $recipientEmail;
    }
}

if ($validRecipients === []) {
    buzon_redirect(false, 'Falta configurar destinatarios del buzon.');
}

$subject = '[Buzon del Rector] ' . $asunto;

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

try {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->Port = $smtpPort;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = $smtpEncryption;
    $mail->Username = $smtpUser;
    $mail->Password = $smtpPassword;
    $mail->CharSet = PHPMailer::CHARSET_UTF8;

    $mail->setFrom($smtpFromEmail, $smtpFromName);
    $mail->addReplyTo($email, $nombre);

    foreach ($validRecipients as $recipient) {
        $mail->addAddress($recipient);
    }

    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AltBody = $body;
    $mail->isHTML(false);
    $mail->send();
} catch (PHPMailerException $e) {
    buzon_redirect(false, 'No se pudo enviar tu mensaje. Intenta nuevamente en unos minutos.');
}

buzon_redirect(true);
