<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

if (!isset($_GET['date1']) || !isset($_GET['date2'])) {
    http_response_code(400);
    echo json_encode(["error" => "Требуются параметры date1 и date2"]);
    exit;
}

$dt1 = DateTime::createFromFormat('Y-m-d', $_GET['date1']);
$dt2 = DateTime::createFromFormat('Y-m-d', $_GET['date2']);

if (!$dt1 || !$dt2) {
    http_response_code(400);
    echo json_encode(["error" => "Неверный формат дат. Используйте Y-m-d"]);
    exit;
}

$diff = $dt1->diff($dt2)->days;

echo json_encode([
    "date1" => $_GET['date1'],
    "date2" => $_GET['date2'],
    "days_diff" => $diff
]);