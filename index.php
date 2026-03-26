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

$file_path = "folder/world.txt";
if (file_exists($file_path)) {
    $bytes = filesize($file_path);
    $kb = $bytes / 1024;
    $mb = $kb / 1024;
    $gb = $mb / 1024;

    echo "Размер world.txt: <br>";
    echo "Байты: " . $bytes . " b<br>";
    echo "Мегабайты: " . $mb . " MB<br>";
    echo "Гигабайты: " . $gb . " GB<br>";
} else {
    echo "Файл не найден<br>";
}

if (unlink("folder/world.txt")) {
    echo "Файл world.txt удален<br>";
} else {
    echo "Не удалось удалить world.txt<br>";
}

echo "Проверка существования:<br>";
echo "world.txt существует? " . (file_exists("folder/world.txt") ? "Да" : "Нет") . "<br>";
echo "mir.txt существует? " . (file_exists("folder/mir.txt") ? "Да" : "Нет") . "<br>";

