<?php
//1
$timestamp = mktime(10, 25, 0, 3, 15, 2025);
echo "Timestamp для 15 марта 2025 года, 10:25:00: " . date("d.m.Y H:i:s", $timestamp) . "<br>";
//2
$oldDate = mktime(8, 5, 59, 10, 2, 1990);
$currentTime = time();
$difference = $currentTime - $oldDate;

echo "Дата: 02.10.1990 08:05:59<br>";
echo "Текущий timestamp: " . $currentTime . "<br>";
echo "Timestamp старой даты: " . $oldDate . "<br>";
echo "Разница в секундах: " . $difference . "<br>";
//3
echo "Текущая дата: " . date("Y.m.d H:i:s") . "<br><br>";
//4
$septemberFirst = mktime(0, 0, 0, 9, 1, date("Y"));
echo "1 сентября текущего года: " . date("Y.m.d", $septemberFirst) . "<br><br>";
//5
$date = mktime(0, 0, 0, 2, 2, 2000);
$weekDays = [
    0 => "воскресенье",
    1 => "понедельник",
    2 => "вторник",
    3 => "среда",
    4 => "четверг",
    5 => "пятница",
    6 => "суббота"
];

$dayNumber = date("w", $date);
echo "2 февраля 2000 года был: " . $weekDays[$dayNumber] . "<br><br>";
//6
$week = [
    "Sunday" => "воскресенье",
    "Monday" => "понедельник",
    "Tuesday" => "вторник",
    "Wednesday" => "среда",
    "Thursday" => "четверг",
    "Friday" => "пятница",
    "Saturday" => "суббота"
];

$currentDay = date("l");
echo "Сегодня: " . $week[$currentDay] . "<br>";

$birthday = mktime(0, 0, 0, 1, 21, 2008);
$birthdayDayNumber = date("w", $birthday);
$birthdayWeekDays = ["воскресенье", "понедельник", "вторник", "среда", "четверг", "пятница", "суббота"];
echo "В мой день рождения, 21 января 2008, был: " . $birthdayWeekDays[$birthdayDayNumber] . "<br><br>";
//7
if (isset($_POST['submit'])) {
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];

    $timestamp1 = strtotime($date1);
    $timestamp2 = strtotime($date2);

    echo "Дата 1: " . $date1 . "<br>";
    echo "Дата 2: " . $date2 . "<br>";

    if ($timestamp1 > $timestamp2) {
        echo "Большая дата: " . $date1 . "<br>";
    } elseif ($timestamp2 > $timestamp1) {
        echo "Большая дата: " . $date2 . "<br>";
    } else {
        echo "Даты равны<br>";
    }
}
?>

<form method="post">
    <label>Первая дата: </label>
    <input type="date" name="date1" required>
    <br>
    <label>Вторая дата: </label>
    <input type="date" name="date2" required>
    <br>
    <input type="submit" name="submit" value="Сравнить">
</form>

<br>
<?php
//8
$inputDate = "2025-12-31";
$timestamp = strtotime($inputDate);
$outputDate = date("d-m-Y", $timestamp);

echo "Исходный формат: $inputDate<br>";
echo "Преобразованный: $outputDate<br><br>";
//9
$date = date_create('2000-02-03');
echo "Исходная дата: " . date_format($date, 'd.m.Y') . "<br>";

date_modify($date, '+2 days');
echo "+2 дня: " . date_format($date, 'd.m.Y') . "<br>";

date_modify($date, '+1 month');
echo "+1 месяц: " . date_format($date, 'd.m.Y') . "<br>";

date_modify($date, '+3 days');
echo "+3 дня: " . date_format($date, 'd.m.Y') . "<br>";

date_modify($date, '+1 year');
echo "+1 год: " . date_format($date, 'd.m.Y') . "<br>";

date_modify($date, '-3 days');
echo "-3 дня: " . date_format($date, 'd.m.Y') . "<br><br>";
//10
$currentDate = time();
$nextYear = date("Y") + 1;
$newYear = mktime(0, 0, 0, 1, 1, $nextYear);
$daysLeft = ceil(($newYear - $currentDate) / 86400);

echo "До Нового года осталось: $daysLeft дней<br>";

