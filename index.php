<?php
$file = fopen("test.txt", "w");
if ($file) {
    fwrite($file, "Привет, мир!");
    fclose($file);
    echo "Файл test.txt создан и данные записаны<br>";
} else {
    echo "Не удалось открыть файл<br>";
}

if (file_exists("test.txt")) {
    $content = file_get_contents("test.txt");
    echo "Содержимое файла test.txt: " . $content . "<br>";
} else {
    echo "Файл test.txt не найден для чтения<br>";
}

