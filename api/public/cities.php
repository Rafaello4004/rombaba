<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
require_once 'config.php';

if (!isset($_GET['country'])) {
    http_response_code(400);
    echo json_encode(["error" => "Параметр country обязателен"]);
    exit;
}

$country = $_GET['country'];

try {
    $pdo = getDB();
    $stmt = $pdo->prepare("
        SELECT c.name 
        FROM cities c 
        JOIN countries co ON c.country_id = co.id 
        WHERE co.name = :country
    ");
    $stmt->execute(['country' => $country]);
    $cities = $stmt->fetchAll(PDO::FETCH_COLUMN);
    
    echo json_encode([
        "country" => $country,
        "cities" => $cities
    ]);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(["error" => "Ошибка базы данных"]);
}