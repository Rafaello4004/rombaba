<?php
mkdir("test");
echo "Папка test создана<br>";

rename("test", "www");
echo "Папка переименована в www<br>";

rmdir("www");
echo "Папка www удалена<br>";

mkdir("test");
$folders = ["documents", "images", "scripts", "backup"];
foreach ($folders as $folder_name) {
    mkdir("test/" . $folder_name);
}
echo "Папки внутри test созданы<br>";

echo "Список JPG файлов в текущей директории:<br>";
$jpg_files = glob("*.jpg");
if (empty($jpg_files)) {
    echo "Нет файлов .jpg в текущей папке<br>";
} else {
    foreach ($jpg_files as $file) {
        echo basename($file) . " (размер: " . filesize($file) . " байт)<br>";
    }
}

