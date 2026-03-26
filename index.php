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

if (rename("test.txt", "mir.txt")) {
    echo "Файл переименован в mir.txt<br>";
} else {
    echo "Ошибка переименования<br>";
}

if (!is_dir("folder")) {
    mkdir("folder");
    echo "Папка 'folder' создана<br>";
}

if (rename("mir.txt", "folder/mir.txt")) {
    echo "Файл перемещен в папку folder<br>";
} else {
    echo "Ошибка перемещения<br>";
}

if (copy("folder/mir.txt", "folder/world.txt")) {
    echo "Создана копия world.txt<br>";
} else {
    echo "Ошибка копирования<br>";
}

