<?php
//Задание 1
$arr = ['a', 'b', 'c', 'd', 'e'];
$result = array_map('strtoupper', $arr);
print_r($result);

//Задание 2
$arr = ['a', 'b', 'c', 'd', 'e'];
echo $arr[count($arr) - 1];

//Задание 3
$arr = [1, 2, 3, 4, 5];
if (array_search(3, $arr) !== false) {
    echo 'Элемент найден';
} else {
    echo 'Элемент не найден';
}

//Задание 4
$arr1 = [1, 2, 3];
$arr2 = ['a', 'b', 'c'];
$result = array_merge($arr1, $arr2);
print_r($result);

//Задание 5
$arr = [1, 2, 3, 4, 5];
$result = array_slice($arr, 1, 3);
print_r($result);

//Задание 6
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$keys = array_keys($arr);
$values = array_values($arr);
print_r($keys);
print_r($values);

//Задание 7
$keys = ['a', 'b', 'c'];
$values = [1, 2, 3];
$result = array_combine($keys, $values);
print_r($result);

//Задание 8
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
$position = array_search('-', $arr);
echo $position;

//Задание 9
$arr = ['3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b'];

// По значениям
asort($arr);
print_r($arr);

// По ключам
ksort($arr);
print_r($arr);

// По значениям в обратном порядке
arsort($arr);
print_r($arr);

//Задание 10
$str = '1234567890';
$arr = str_split($str);
$sum = array_sum($arr);
echo $sum; 

//Задание 11
$result = array_fill(0, 10, 'x');
print_r($result);

//Задание 12
$arr1 = [1, 2, 3, 4, 5];
$arr2 = [3, 4, 5, 6, 7];
$result = array_intersect($arr1, $arr2);
print_r($result);