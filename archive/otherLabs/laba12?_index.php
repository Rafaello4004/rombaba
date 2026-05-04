<?php

// 1
$arr = ['a', 'b', 'c', 'd', 'e'];
$result1 = array_map('strtoupper', $arr);
print_r($result1);

// 2
$arr = [1, 2, 3, 4, 5];
echo $arr[count($arr) - 1] . "\n";

// 3
$arr = [1, 2, 3, 4, 5];
if (in_array(3, $arr)) {
    echo "Есть\n";
} else {
    echo "Нет\n";
}

// 4
$a = [1, 2, 3];
$b = ['a', 'b', 'c'];
$result4 = array_merge($a, $b);
print_r($result4);

// 5
$arr = [1, 2, 3, 4, 5];
$result5 = array_slice($arr, 1, 3);
print_r($result5);

// 6
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
$keys = array_keys($arr);
$values = array_values($arr);
print_r($keys);
print_r($values);

// 7
$a = ['a', 'b', 'c'];
$b = [1, 2, 3];
$result7 = array_combine($a, $b);
print_r($result7);

// 8
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
$pos = array_search('-', $arr);
echo $pos . "\n";

// 9
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];

asort($arr);
print_r($arr);

ksort($arr);
print_r($arr);

arsort($arr);
print_r($arr);

krsort($arr);
print_r($arr);

// 10
$str = '1234567890';
$arr = str_split($str);
$sum = array_sum($arr);
echo $sum . "\n";

// 11
$result11 = array_fill(0, 10, 'x');
print_r($result11);

// 12
$a = [1, 2, 3, 4, 5];
$b = [3, 4, 5, 6, 7];
$result12 = array_intersect($a, $b);
print_r($result12);
