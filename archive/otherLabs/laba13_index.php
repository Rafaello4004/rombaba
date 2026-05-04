<?php

//1
class Wrkr
{
    //9
    private $name;
    private $age;
    private $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    //3
    public function getName()
    {
        return $this->name;
    }

    //4
    public function getAge()
    {
        return $this->age;
    }

    //5
    public function getSalary()
    {
        return $this->salary;
    }

    //10
    public function setAge($newAge)
    {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        } else {
            echo "Вам работать в нашей компании еще рано<br>";
        }
    }

    private function checkAge($age)
    {
        return $age >= 18;
    }

    public function isAdult()
    {
        return $this->checkAge($this->age);
    }
}

$wrkr1 = new Wrkr("Настя", 18, 125000);
$wrkr2 = new Wrkr("Коля", 20, 25000);

echo "Сумма зарплат: " . ($wrkr1->getSalary() + $wrkr2->getSalary()) . "<br>";
echo "Сумма возрастов: " . ($wrkr1->getAge() + $wrkr2->getAge()) . "<br>";

echo "Имя 1: " . $wrkr1->getName() . ", Возраст 1: " . $wrkr1->getAge() . ", Зарплата 1: " . $wrkr1->getSalary() . "<br>";
echo "Имя 2: " . $wrkr2->getName() . ", Возраст 2: " . $wrkr2->getAge() . ", Зарплата 2: " . $wrkr2->getSalary() . "<br>";

//6
function getTotalSalary($wrkrs)
{
    $sum = 0;
    foreach ($wrkrs as $wrkr) {
        $sum += $wrkr->getSalary();
    }
    return $sum;
}

$allWrkrs = [$wrkr1, $wrkr2];
echo "Общая сумма зарплат через функцию: " . getTotalSalary($allWrkrs) . "<br>";

//10
echo "Устанавлю возраст 20 для wrkr1<br>";
$wrkr1->setAge(20);
echo "Новый возраст wrkr1: " . $wrkr1->getAge() . "<br>";

echo "Пытаюсь установить возраст 16 для wrkr2<br>";
$wrkr2->setAge(16);
echo "Текущий возраст wrkr2: " . $wrkr2->getAge() . "<br>";

echo "Работник 1 старше 18? - " . ($wrker1->isAdult() ? 'Да' : 'Нет') . "<br>";
echo "Работник 2 старше 18? - " . ($wrker2->isAdult() ? 'Да' : 'Нет') . "<br>";
