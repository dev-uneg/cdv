<?php

return [
    // Servidor SMTP. Para Gmail mantenlo en smtp.gmail.com
    'host' => 'smtp.gmail.com',

    // Puerto SMTP de Gmail con STARTTLS
    'port' => 587,

    // Seguridad SMTP: tls (STARTTLS) o ssl (SMTPS)
    'encryption' => 'tls',

    // Cuenta remitente
    'username' => 'webs.delvalle@gmail.com',

    // App Password de Gmail (ponla manualmente)
    'password' => 'fkylmccydjpbkiqz',

    // Remitente visible
    'from_email' => 'webs.delvalle@gmail.com',
    'from_name' => 'Colegio del Valle',

    // Destinatarios del formulario "Buzon del Rector"
    'buzon_rector_recipients' => [
        'gabriel.riancho@uneg.edu.mx',
        'elizabeth.cisneros@uneg.edu.mx',
        'jair.uneg@gmail.com',
    ],
];
