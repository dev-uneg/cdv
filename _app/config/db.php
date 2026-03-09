<?php

return [
    // Configuracion base de BD para admin/formularios.
    // Recomendado: crear _app/config/db.local.php (no versionado) con estos valores reales.
    'host' => getenv('DB_HOST') ?: '127.0.0.1',
    'port' => (int) (getenv('DB_PORT') ?: 3306),
    'database' => getenv('DB_DATABASE') ?: 'cdv_web2026',
    'username' => getenv('DB_USERNAME') ?: 'cdv_web2026',
    'password' => getenv('DB_PASSWORD') ?: 'FWf2Fa7h$S)hs#k3',
    'charset' => 'utf8mb4',
];
