<?php
declare(strict_types=1);

function leads_db_config(): array
{
    $config = [];
    $baseConfigPath = __DIR__ . '/../config/db.php';
    if (file_exists($baseConfigPath)) {
        $loaded = require $baseConfigPath;
        if (is_array($loaded)) {
            $config = $loaded;
        }
    }

    $localConfigPath = __DIR__ . '/../config/db.local.php';
    if (file_exists($localConfigPath)) {
        $loadedLocal = require $localConfigPath;
        if (is_array($loadedLocal)) {
            $config = array_merge($config, $loadedLocal);
        }
    }

    $host = (string) ($config['host'] ?? getenv('DB_HOST') ?: '127.0.0.1');
    $port = (int) ($config['port'] ?? getenv('DB_PORT') ?: 3306);
    $database = (string) ($config['database'] ?? getenv('DB_DATABASE') ?: '');
    $username = (string) ($config['username'] ?? getenv('DB_USERNAME') ?: '');
    $password = (string) ($config['password'] ?? getenv('DB_PASSWORD') ?: '');
    $charset = (string) ($config['charset'] ?? 'utf8mb4');

    return [
        'host' => $host,
        'port' => $port,
        'database' => $database,
        'username' => $username,
        'password' => $password,
        'charset' => $charset,
    ];
}

function leads_db(): PDO
{
    static $pdo = null;
    if ($pdo instanceof PDO) {
        return $pdo;
    }

    $db = leads_db_config();
    if ($db['database'] === '' || $db['username'] === '') {
        throw new RuntimeException('Configura DB_DATABASE y DB_USERNAME (o _app/config/db.local.php).');
    }

    $dsn = sprintf(
        'mysql:host=%s;port=%d;dbname=%s;charset=%s',
        $db['host'],
        $db['port'],
        $db['database'],
        $db['charset']
    );

    $pdo = new PDO($dsn, $db['username'], $db['password'], [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);

    leads_db_init($pdo);

    return $pdo;
}

function leads_db_index_exists(PDO $pdo, string $table, string $index): bool
{
    $stmt = $pdo->prepare(
        'SELECT 1 FROM INFORMATION_SCHEMA.STATISTICS
         WHERE TABLE_SCHEMA = DATABASE()
           AND TABLE_NAME = :table
           AND INDEX_NAME = :indexName
         LIMIT 1'
    );
    $stmt->execute([
        ':table' => $table,
        ':indexName' => $index,
    ]);

    return (bool) $stmt->fetchColumn();
}

function leads_db_column_exists(PDO $pdo, string $table, string $column): bool
{
    $stmt = $pdo->prepare(
        'SELECT 1 FROM INFORMATION_SCHEMA.COLUMNS
         WHERE TABLE_SCHEMA = DATABASE()
           AND TABLE_NAME = :table
           AND COLUMN_NAME = :columnName
         LIMIT 1'
    );
    $stmt->execute([
        ':table' => $table,
        ':columnName' => $column,
    ]);

    return (bool) $stmt->fetchColumn();
}

function leads_db_init(PDO $pdo): void
{
    $pdo->exec('CREATE TABLE IF NOT EXISTS contacto_leads (
        id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
        full_name VARCHAR(190) NOT NULL,
        email VARCHAR(190) NOT NULL,
        phone VARCHAR(60) NOT NULL,
        interest VARCHAR(190) NOT NULL,
        source VARCHAR(255) NULL,
        message TEXT NULL,
        channel VARCHAR(120) NULL,
        medium VARCHAR(120) NULL,
        page_path VARCHAR(255) NULL,
        pipedrive_person_id VARCHAR(80) NULL,
        status VARCHAR(60) NOT NULL,
        error_message TEXT NULL,
        ip VARCHAR(64) NULL,
        user_agent TEXT NULL,
        created_at DATETIME NOT NULL,
        PRIMARY KEY (id)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci');

    $pdo->exec('CREATE TABLE IF NOT EXISTS buzon_rector_messages (
        id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
        nombre VARCHAR(190) NOT NULL,
        email VARCHAR(190) NOT NULL,
        telefono VARCHAR(60) NULL,
        relacion VARCHAR(80) NOT NULL,
        asunto VARCHAR(255) NOT NULL,
        mensaje LONGTEXT NOT NULL,
        aviso_aceptado TINYINT(1) NOT NULL DEFAULT 0,
        ip VARCHAR(64) NULL,
        user_agent TEXT NULL,
        created_at DATETIME NOT NULL,
        PRIMARY KEY (id)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci');

    $pdo->exec('CREATE TABLE IF NOT EXISTS whatsapp_clicks (
        id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
        page_path VARCHAR(255) NULL,
        target_url VARCHAR(500) NULL,
        device_type VARCHAR(30) NULL,
        referrer_url VARCHAR(500) NULL,
        ip VARCHAR(64) NULL,
        user_agent TEXT NULL,
        created_at DATETIME NOT NULL,
        PRIMARY KEY (id)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci');

    if (!leads_db_index_exists($pdo, 'contacto_leads', 'contacto_leads_created_at_idx')) {
        $pdo->exec('CREATE INDEX contacto_leads_created_at_idx ON contacto_leads (created_at)');
    }
    if (!leads_db_column_exists($pdo, 'contacto_leads', 'page_path')) {
        $pdo->exec('ALTER TABLE contacto_leads ADD COLUMN page_path VARCHAR(255) NULL AFTER medium');
    }
    if (!leads_db_index_exists($pdo, 'buzon_rector_messages', 'buzon_rector_messages_created_at_idx')) {
        $pdo->exec('CREATE INDEX buzon_rector_messages_created_at_idx ON buzon_rector_messages (created_at)');
    }
    if (!leads_db_index_exists($pdo, 'whatsapp_clicks', 'whatsapp_clicks_created_at_idx')) {
        $pdo->exec('CREATE INDEX whatsapp_clicks_created_at_idx ON whatsapp_clicks (created_at)');
    }
    if (!leads_db_index_exists($pdo, 'whatsapp_clicks', 'whatsapp_clicks_page_path_idx')) {
        $pdo->exec('CREATE INDEX whatsapp_clicks_page_path_idx ON whatsapp_clicks (page_path(190))');
    }
}

function leads_db_datetime($value): string
{
    $raw = is_string($value) ? trim($value) : '';
    if ($raw === '') {
        return date('Y-m-d H:i:s');
    }

    $timestamp = strtotime($raw);
    if ($timestamp === false) {
        return date('Y-m-d H:i:s');
    }

    return date('Y-m-d H:i:s', $timestamp);
}

function contacto_db_insert(array $data): ?int
{
    try {
        $pdo = leads_db();

        $pagePathRaw = trim((string) ($data['page_path'] ?? ($_POST['page_path'] ?? '')));
        if ($pagePathRaw !== '' && strpos($pagePathRaw, '/') !== 0) {
            $parsedPath = (string) parse_url($pagePathRaw, PHP_URL_PATH);
            $pagePathRaw = $parsedPath !== '' ? $parsedPath : '';
        }
        if ($pagePathRaw !== '' && strpos($pagePathRaw, '/') !== 0) {
            $pagePathRaw = '/' . ltrim($pagePathRaw, '/');
        }
        if ($pagePathRaw !== '') {
            $pagePathRaw = substr($pagePathRaw, 0, 255);
        }
        $pagePath = $pagePathRaw !== '' ? $pagePathRaw : null;

        $stmt = $pdo->prepare('INSERT INTO contacto_leads (
            full_name, email, phone, interest, source, message, channel, medium, page_path,
            pipedrive_person_id, status, error_message, ip, user_agent, created_at
        ) VALUES (
            :full_name, :email, :phone, :interest, :source, :message, :channel, :medium, :page_path,
            :pipedrive_person_id, :status, :error_message, :ip, :user_agent, :created_at
        )');
        $stmt->execute([
            ':full_name' => $data['full_name'] ?? '',
            ':email' => $data['email'] ?? '',
            ':phone' => $data['phone'] ?? '',
            ':interest' => $data['interest'] ?? '',
            ':source' => $data['source'] ?? null,
            ':message' => $data['message'] ?? null,
            ':channel' => $data['channel'] ?? null,
            ':medium' => $data['medium'] ?? null,
            ':page_path' => $pagePath,
            ':pipedrive_person_id' => $data['pipedrive_person_id'] ?? null,
            ':status' => $data['status'] ?? 'received',
            ':error_message' => $data['error_message'] ?? null,
            ':ip' => $data['ip'] ?? null,
            ':user_agent' => $data['user_agent'] ?? null,
            ':created_at' => leads_db_datetime($data['created_at'] ?? null),
        ]);

        return (int) $pdo->lastInsertId();
    } catch (Throwable $e) {
        error_log('[contacto_db_insert] ' . $e->getMessage());
        return null;
    }
}

function contacto_db_update(int $id, array $data): void
{
    if ($id <= 0) {
        return;
    }

    try {
        $pdo = leads_db();
        $sets = [];
        $params = [':id' => $id];
        foreach ($data as $key => $value) {
            if ($key === 'created_at') {
                $value = leads_db_datetime($value);
            }
            $sets[] = $key . ' = :' . $key;
            $params[':' . $key] = $value;
        }
        if ($sets === []) {
            return;
        }
        $sql = 'UPDATE contacto_leads SET ' . implode(', ', $sets) . ' WHERE id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
    } catch (Throwable $e) {
        error_log('[contacto_db_update] ' . $e->getMessage());
    }
}

function buzon_rector_db_insert(array $data): ?int
{
    try {
        $pdo = leads_db();
        $stmt = $pdo->prepare('INSERT INTO buzon_rector_messages (
            nombre, email, telefono, relacion, asunto, mensaje, aviso_aceptado, ip, user_agent, created_at
        ) VALUES (
            :nombre, :email, :telefono, :relacion, :asunto, :mensaje, :aviso_aceptado, :ip, :user_agent, :created_at
        )');
        $stmt->execute([
            ':nombre' => $data['nombre'] ?? '',
            ':email' => $data['email'] ?? '',
            ':telefono' => $data['telefono'] ?? null,
            ':relacion' => $data['relacion'] ?? '',
            ':asunto' => $data['asunto'] ?? '',
            ':mensaje' => $data['mensaje'] ?? '',
            ':aviso_aceptado' => !empty($data['aviso_aceptado']) ? 1 : 0,
            ':ip' => $data['ip'] ?? null,
            ':user_agent' => $data['user_agent'] ?? null,
            ':created_at' => leads_db_datetime($data['created_at'] ?? null),
        ]);

        return (int) $pdo->lastInsertId();
    } catch (Throwable $e) {
        error_log('[buzon_rector_db_insert] ' . $e->getMessage());
        return null;
    }
}

function whatsapp_click_db_insert(array $data): ?int
{
    try {
        $pdo = leads_db();

        $stmt = $pdo->prepare('INSERT INTO whatsapp_clicks (
            page_path, target_url, device_type, referrer_url, ip, user_agent, created_at
        ) VALUES (
            :page_path, :target_url, :device_type, :referrer_url, :ip, :user_agent, :created_at
        )');

        $pagePath = trim((string) ($data['page_path'] ?? ''));
        if ($pagePath !== '' && strpos($pagePath, '/') !== 0) {
            $pagePath = '/' . ltrim($pagePath, '/');
        }
        $targetUrl = trim((string) ($data['target_url'] ?? ''));
        $deviceType = trim((string) ($data['device_type'] ?? ''));
        $referrerUrl = trim((string) ($data['referrer_url'] ?? ''));

        $stmt->execute([
            ':page_path' => $pagePath !== '' ? substr($pagePath, 0, 255) : null,
            ':target_url' => $targetUrl !== '' ? substr($targetUrl, 0, 500) : null,
            ':device_type' => $deviceType !== '' ? substr($deviceType, 0, 30) : null,
            ':referrer_url' => $referrerUrl !== '' ? substr($referrerUrl, 0, 500) : null,
            ':ip' => $data['ip'] ?? null,
            ':user_agent' => $data['user_agent'] ?? null,
            ':created_at' => leads_db_datetime($data['created_at'] ?? null),
        ]);

        return (int) $pdo->lastInsertId();
    } catch (Throwable $e) {
        return null;
    }
}
