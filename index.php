<?php
$file = fopen("test.txt", "w");
if ($file) {
    fwrite($file, "Привет, мир!");
    fclose($file);
    echo "Файл test.txt создан и данные записаны<br>";
} else {
    echo "Не удалось открыть файл<br>";
}
?>
