<?php
declare(strict_types=1);

session_start();
require __DIR__ . '/../../helpers/admin_auth.php';

admin_require_auth();

$base = admin_base_path();
require __DIR__ . '/../../pages/admin/pipedrive-owner-ids.php';
