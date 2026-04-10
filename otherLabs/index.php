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
$m_use = fn($a, $b) => $mul($a, $b);
echo "tada";
echo $m_reg(3, 7) . "<br><br>";
echo "tada";


$m_result = function() use ($a, $b) {
    $mul($a, $b);
};  

//Задание 3
function operation($m, $n, $o) {
    return $o($m, $n);
}

echo operation(3, 4, function($a, $b) {
    return $a + $b;
});