<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
require_once 'config.php';

// Предварительная обработка OPTIONS запросов
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

$action = $_GET['action'] ?? null;
$pdo = getDB();

try {
    switch ($action) {
        case 'all':
            $stmt = $pdo->query("SELECT * FROM records ORDER BY id");
            echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
            break;

        case 'get':
            if (!isset($_GET['id'])) {
                http_response_code(400);
                echo json_encode(["error" => "id обязателен"]);
                exit;
            }
            $stmt = $pdo->prepare("SELECT * FROM records WHERE id = ?");
            $stmt->execute([$_GET['id']]);
            $record = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($record) {
                echo json_encode($record);
            } else {
                http_response_code(404);
                echo json_encode(["error" => "Запись не найдена"]);
            }
            break;

        case 'del':
            if (!isset($_GET['id'])) {
                http_response_code(400);
                echo json_encode(["error" => "id обязателен"]);
                exit;
            }
            $stmt = $pdo->prepare("DELETE FROM records WHERE id = ?");
            $stmt->execute([$_GET['id']]);
            echo json_encode(["success" => true, "message" => "Запись удалена"]);
            break;

        case 'edit':
            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                http_response_code(405);
                echo json_encode(["error" => "Требуется POST запрос"]);
                exit;
            }
            if (!isset($_GET['id'])) {
                http_response_code(400);
                echo json_encode(["error" => "id обязателен"]);
                exit;
            }
            $input = json_decode(file_get_contents('php://input'), true);
            if (!$input || !isset($input['title'])) {
                http_response_code(400);
                echo json_encode(["error" => "Необходимо поле title"]);
                exit;
            }
            $stmt = $pdo->prepare("UPDATE records SET title = ?, content = ? WHERE id = ?");
            $stmt->execute([$input['title'], $input['content'] ?? '', $_GET['id']]);
            echo json_encode(["success" => true, "message" => "Запись обновлена"]);
            break;

        default:
            http_response_code(400);
            echo json_encode([
                "error" => "Неизвестное действие",
                "available_actions" => ["all", "get", "del", "edit"]
            ]);
    }
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(["error" => "Ошибка базы данных"]);
}