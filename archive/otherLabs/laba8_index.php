<?php
//Задание 1
$mul = fn($a, $b) => $a * $b;

//echo $mul(7, 7) . "<br><br>";

//Задание 2
$m_reg = function($a, $b) {
    return $mul($a, $b);
};
//echo "tada";
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

// echo operation(3, 4, function($a, $b) {
//     return $a + $b;
// });

// Задание 4
function array_map_custom(callable $fn, array $array) {
    $result = [];
    foreach ($array as $key => $value) {
        $result[$key] = $fn($value);
    }
    return $result;
}

// Задание 5
function checkPassword($password) {
    $password = (string)$password;
    $length = strlen($password);
    
    if ($length > 5 && $length < 10) {
        echo "Пароль подходит\n";
    } else {
        echo "Нужно придумать другой пароль\n";
    }
}

// Задание 6
function checkHttpProtocol($str) {
    $str = (string)$str;
    if (strpos($str, 'http://') === 0 || strpos($str, 'https://') === 0) {
        echo "да\n";
    } else {
        echo "нет\n";
    }
}

// Задание 7 
function checkImageExtension($str) {
    $str = (string)$str;
    $extension = substr($str, -4);
    
    if ($extension === '.png' || $extension === '.jpg') {
        echo "да\n";
    } else {
        echo "нет\n";
    }
}

// Задание 8
$str = '16.04.2021';

function replaceDotsToDashes($str) {
    $str = (string)$str;
    return str_replace('.', '-', $str);
}

// Задание 9
$str = 'html css php';

function stringToArray($str) {
    $str = (string)$str;
    return explode(' ', $str);
}

// Задание 10
$str = array('html', 'css', 'php');

function arrayToString(array $arr) {
    return implode(',', $arr);
}