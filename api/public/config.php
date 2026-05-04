<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'fwyosss_db');
define('DB_USER', 'fwyosss');
define('DB_PASS', '153759');

function getDB() {
    static $pdo = null;
    if ($pdo === null) {
        try {
            $pdo = new PDO(
                "pgsql:host=" . DB_HOST . ";dbname=" . DB_NAME,
                DB_USER,
                DB_PASS,
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        } catch (PDOException $e) {
            http_response_code(500);
            echo json_encode(["error" => "Ошибка подключения к БД"]);
            exit;
        }
    }
    return $pdo;
}