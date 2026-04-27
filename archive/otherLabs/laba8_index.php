<?php
//Задание 1
$mul = fn($a, $b) => $a * $b;

echo $mul(7, 7) . "<br><br>";

//Задание 2
$m_reg = function($a, $b) {
    return $mul($a, $b);
};
echo "tada";
$a = 38;
$b = 87;
$m_use = function() use ($a, $b) {
    $mul($a, $b);
};  
//$m_use = fn($a, $b) => $mul($a, $b);
// echo "tada";
// echo $m_reg(3, 7) . "<br><br>";
// echo "tada";


// $m_result = function() use ($a, $b) {
//     $mul($a, $b);
// };  

//Задание 3
function operation($m, $n, $o) {
    return $o($m, $n);
}

echo operation(3, 4, function($a, $b) {
    return $a + $b;
});

// Задание 4
function array_map_custom(callable $fn, array $array) {
    $result = [];
    foreach ($array as $key => $value) {
        $result[$key] = $fn($value);
    }
    return $result;
}

//!!!ДИПСИК АЛЕРТ!!!
//!!!СИК ШЕЛТЕР!!!

// 5. Проверка пароля
function checkPassword($password) {
    // Приводим к строке и получаем длину
    $password = (string)$password;
    $length = strlen($password);
    
    if ($length > 5 && $length < 10) {
        echo "Пароль подходит (длина: $length символов)\n";
    } else {
        echo "Нужно придумать другой пароль (длина: $length символов)\n";
    }
}

// 6. Проверка начала строки на http:// или https://
function checkHttpProtocol($str) {
    $str = (string)$str;
    if (strpos($str, 'http://') === 0 || strpos($str, 'https://') === 0) {
        echo "да\n";
    } else {
        echo "нет\n";
    }
}

// Альтернативный вариант с substr
function checkHttpProtocol_v2($str) {
    $str = (string)$str;
    if (substr($str, 0, 7) === 'http://' || substr($str, 0, 8) === 'https://') {
        echo "да\n";
    } else {
        echo "нет\n";
    }
}

// 7. Проверка окончания строки на .png или .jpg
function checkImageExtension($str) {
    $str = (string)$str;
    // Проверяем последние 4 символа
    $extension = substr($str, -4);
    
    if ($extension === '.png' || $extension === '.jpg') {
        echo "да\n";
    } else {
        echo "нет\n";
    }
}

// 8. Замена точек на дефисы
function replaceDotsToDashes($str) {
    $str = (string)$str;
    return str_replace('.', '-', $str);
}

// 9. Разбиение строки в массив через explode
function stringToArray($str) {
    $str = (string)$str;
    return explode(' ', $str);
}

// 10. Объединение массива в строку через implode
function arrayToString(array $arr) {
    return implode(',', $arr);
}