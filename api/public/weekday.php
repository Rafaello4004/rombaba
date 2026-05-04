<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

if (!isset($_GET['date'])) {
    http_response_code(400);
    echo json_encode(["error" => "Параметр date обязателен (Y-m-d)"]);
    exit;
}

$date = $_GET['date'];
$dt = DateTime::createFromFormat('Y-m-d', $date);

if (!$dt || $dt->format('Y-m-d') !== $date) {
    http_response_code(400);
    echo json_encode(["error" => "Неверный формат даты. Используйте Y-m-d"]);
    exit;
}

$weekdays = [
    'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
    'Четверг', 'Пятница', 'Суббота'
];

echo json_encode([
    "date" => $date,
    "weekday" => $weekdays[(int)$dt->format('w')]
]);