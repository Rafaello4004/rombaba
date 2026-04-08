<?php
//Задание 1
$num1 = 6;
$num2 = 12;
echo $num1 * 0.4 + $num2 * 0.84 . "<br><br>";

//Задание 2
$num3 = 45;
if ($num3 > 10)
    $num3 += 100;
else
    $num3 -= 30;
echo $num3 . "<br><br>";

//Задание 3
$num4 = 17;
if (!($num4 % 2))
    $num4 /= 2;
else
    $num4 *= 3;
echo $num4 . "<br><br>";

//Задание 4
$min = 43;
if ($min <= 15)
    echo "Первая четверть часа";
else if ($min <= 30)
    echo "Вторая четверть часа";
else if ($min <= 45)
    echo "Третья четверть часа";
else
    echo "Четвертая четверть часа";

echo "<br><br>";

//Задание 5
$month = 4;
if ($month == 12 || $month <= 2)
    echo "Зима";
else if ($month <= 5)
    echo "Весна";
else if ($month <= 8)
    echo "Лето";
else
    echo "Осень";

echo "<br><br>";

//Задание 6
$a = [5, 0, -3, 2];
foreach ($a as $a1) {
    echo "Значение \$a: " . $a1;
    if ($a1 == 0 || $a1 == 2)
        $a1 += 7;
    else
        $a1 /= 10;
    echo " -> " . $a1 . "<br><br>";
}

//Задание 7
if (isset($_POST['seconds'])) {
$seconds = (int)$_POST['seconds'];
echo "Это " .
     floor($seconds / 60 / 60 / 24) . 
     " дней, " .
     $seconds / 60 / 60 % 24 .
     " часов, " . 
     $seconds / 60 % 60 % 24 . 
     " минут, " . 
     $seconds % 60 % 60 % 24 . 
     " секунд";
}
?>

<form method="post">
    <input type="number" name="seconds" placeholder="Введите количество секунд" required>
    <button type="submit">Перевести</button>
</form>

<?php

//Задание 8
$num5 = 16;
if ($num5 >= 50)
    echo $num5 * $num5;
else if ($num5 > 10 && $num5 < 30)
    echo 0;
else
    echo "Ошибка";

echo "<br><br>";

//Задание 9
function square($value) {
    return $value * $value;
}

//Задание 10
function sum($value1, $value2) {
    return $value1 + $value2;
}

//Задание 11
function magic($value1, $value2, $value3) {
    return ($value1 - $value2) / $value3;
}

//Задание 12
function getWeekday($int_weekday) {
    $week = [
        "бебебе",
        "Понедельник",
        "Вторник",
        "Среда",
        "Четверг",
        "Пятница",
        "Суббота",
        "Воскресенье"
    ];
    return $week[$int_weekday];
}

echo square(13) . "<br>";
echo sum(1, 1) . "<br>";
echo magic(12, 6, 2) . "<br>";
echo getWeekday(3) . "<br>";