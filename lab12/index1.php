<?php

try {
    $file = fopen("labrakadabra.txt", "r");

    if ($file === false) {
        throw new Exception("Не удалось открыть файл");
    }
    fclose($file);
} catch (Exception $ex) {
    echo "Исключение: " . $ex->getMessage() . "<br>";
}

function divide($a, $b) {
    if ($b == 0) {
        throw new Exception("Ошибка: деление на ноль");
    }
    return $a / $b;
}

try {
    $result = divide(10, 0);
    echo "Результат деления: $result<br>";

} catch (Exception $ex) {
    $errorMessage = date("Y-m-d H:i:s") . " - " . $ex->getMessage() . "\n";

    file_put_contents("/var/www/deriugin.ru/lab12/log.txt", $errorMessage, FILE_APPEND);

    echo "Сообщение об ошибке записано в log.txt<br>";
    echo "Сообщение: " . $ex->getMessage() . "<br>";
}

if (file_exists("log.txt")) {
    echo "<br>Содержимое log.txt:<br>";

$fd = fopen("log.txt", 'r') or die("Не удалось открыть файл");
while (!feof($fd))
{
  $str = htmlentities(fgets($fd));
  echo $str . "<br>";
}
fclose($fd);

}

$countries = ['Spain' => 'Madrid', 'Russia' => 'Moscow'];

function getCapital($countries, $countryName) {
    if (!array_key_exists($countryName, $countries)) {
        throw new Exception("Страна '$countryName' не найдена в массиве");
    }
    return $countries[$countryName];
}

try {
    $capital = getCapital($countries, 'Germany');
    echo "Столица Германии: $capital<br>";

} catch (Exception $ex) {
    echo "Исключение: " . $ex->getMessage() . "<br>";
}

try {
    $capital = getCapital($countries, 'Russia');
    echo "Столица России: $capital<br>";
} catch (Exception $ex) {
    echo "Исключение: " . $ex->getMessage() . "<br>";
}

