<?php
declare(strict_types=1);

/**
 * Relay de correo del Buzón del Rector.
 * Recibe POST, valida y envía email por SMTP.
 * Subir en: /web/delvalle.qodexia.site/public_html/buzon-cdv-relay-mailer.php
 * URL: https://delvalle.qodexia.site/buzon-cdv-relay-mailer.php
 */

header('Content-Type: application/json; charset=UTF-8');

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Metodo no permitido']);
    exit;
}

$autoloadPaths = [
    __DIR__ . '/vendor/autoload.php',
    dirname(__DIR__) . '/vendor/autoload.php',
];
$autoloadLoaded = false;
foreach ($autoloadPaths as $autoload) {
    if (is_file($autoload)) {
        require_once $autoload;
        $autoloadLoaded = true;
        break;
    }
}

if (!$autoloadLoaded) {
    $phpMailerBase = __DIR__ . '/vendor/phpmailer/phpmailer/src';
    if (!is_file($phpMailerBase . '/Exception.php') || !is_file($phpMailerBase . '/PHPMailer.php') || !is_file($phpMailerBase . '/SMTP.php')) {
        http_response_code(500);
        echo json_encode(['ok' => false, 'error' => 'No se encontro PHPMailer en /vendor']);
        exit;
    }
    require_once $phpMailerBase . '/Exception.php';
    require_once $phpMailerBase . '/PHPMailer.php';
    require_once $phpMailerBase . '/SMTP.php';
}

if (!class_exists(\PHPMailer\PHPMailer\PHPMailer::class)) {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'PHPMailer no disponible']);
    exit;
}

$raw = file_get_contents('php://input');
$input = [];
if (is_string($raw) && trim($raw) !== '') {
    $decoded = json_decode($raw, true);
    if (is_array($decoded)) {
        $input = $decoded;
    }
}
if ($input === []) {
    $input = $_POST;
}

$clean = static function (string $value): string {
    return trim(str_replace(["\r", "\n"], ' ', $value));
};

$nombre = $clean((string) ($input['nombre'] ?? ''));
$email = trim((string) ($input['email'] ?? ''));
$telefono = $clean((string) ($input['telefono'] ?? ''));
$relacion = $clean((string) ($input['relacion'] ?? ''));
$asunto = $clean((string) ($input['asunto'] ?? ''));
$mensaje = trim((string) ($input['mensaje'] ?? ''));
$ip = trim((string) ($input['ip'] ?? ''));
$createdAt = trim((string) ($input['created_at'] ?? date('c')));

if ($nombre === '' || $email === '' || $relacion === '' || $asunto === '' || $mensaje === '') {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Faltan campos obligatorios']);
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Correo invalido']);
    exit;
}

$smtpHost = 'smtp.gmail.com';
$smtpPort = 587;
$smtpEncryption = 'tls';
$smtpUsername = 'webs.delvalle@gmail.com';
$smtpPassword = 'fkylmccydjpbkiqz';
$fromEmail = 'webs.delvalle@gmail.com';
$fromName = 'Colegio del Valle';
$recipients = [
    'gabriel.riancho@uneg.edu.mx',
    'elizabeth.cisneros@uneg.edu.mx',
    'jair.uneg@gmail.com',
];

if ($smtpPassword === '' || $smtpPassword === 'PON_AQUI_TU_APP_PASSWORD') {
    http_response_code(500);
    echo json_encode(['ok' => false, 'phase' => 'relay_config', 'error' => 'Configura smtpPassword en buzon-cdv-relay-mailer.php']);
    exit;
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
    '',
    'Fecha: ' . $createdAt,
    'IP: ' . ($ip !== '' ? $ip : 'N/D'),
];
$bodyText = implode("\n", $bodyLines);

$h = static function (string $value): string {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
};
$bodyHtml = '<div style="font-family:Arial,sans-serif;font-size:14px;color:#0f172a;line-height:1.5;">'
    . '<h2 style="margin:0 0 14px;font-size:18px;color:#0f172a;">Nuevo mensaje desde el Buzon del Rector</h2>'
    . '<table cellpadding="6" cellspacing="0" border="0" style="border-collapse:collapse;">'
    . '<tr><td style="font-weight:bold;">Nombre:</td><td>' . $h($nombre) . '</td></tr>'
    . '<tr><td style="font-weight:bold;">Correo:</td><td>' . $h($email) . '</td></tr>'
    . '<tr><td style="font-weight:bold;">Telefono:</td><td>' . $h($telefono !== '' ? $telefono : 'No proporcionado') . '</td></tr>'
    . '<tr><td style="font-weight:bold;">Relacion:</td><td>' . $h($relacion) . '</td></tr>'
    . '<tr><td style="font-weight:bold;">Asunto:</td><td>' . $h($asunto) . '</td></tr>'
    . '<tr><td style="font-weight:bold;">Fecha:</td><td>' . $h($createdAt) . '</td></tr>'
    . '<tr><td style="font-weight:bold;">IP:</td><td>' . $h($ip !== '' ? $ip : 'N/D') . '</td></tr>'
    . '</table>'
    . '<p style="margin:16px 0 6px;font-weight:bold;">Mensaje:</p>'
    . '<div style="white-space:pre-wrap;background:#f8fafc;border:1px solid #e2e8f0;border-radius:8px;padding:10px;">'
    . $h($mensaje)
    . '</div>'
    . '</div>';

try {
    $mail = new \PHPMailer\PHPMailer\PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->Port = $smtpPort;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = strtolower($smtpEncryption) === 'ssl'
        ? \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS
        : \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Username = $smtpUsername;
    $mail->Password = $smtpPassword;
    $mail->Timeout = 30;
    $mail->SMTPKeepAlive = false;
    $mail->CharSet = 'UTF-8';
    $mail->setFrom($fromEmail, $fromName);
    $mail->addReplyTo($email, $nombre);

    foreach ($recipients as $recipient) {
        $recipientEmail = trim((string) $recipient);
        if ($recipientEmail !== '' && filter_var($recipientEmail, FILTER_VALIDATE_EMAIL)) {
            $mail->addAddress($recipientEmail);
        }
    }

    $mail->Subject = $subject;
    $mail->Body = $bodyHtml;
    $mail->AltBody = $bodyText;
    $mail->isHTML(true);
    $mail->send();

    echo json_encode(['ok' => true, 'phase' => 'ok']);
    exit;
} catch (\PHPMailer\PHPMailer\Exception $e) {
    http_response_code(500);
    echo json_encode(['ok' => false, 'phase' => 'smtp_send', 'error' => $clean($e->getMessage())]);
    exit;
}
