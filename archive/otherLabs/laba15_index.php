<?php

abstract class Figure {
    protected $area;
    protected $color;
    protected $sides;

    abstract public function infoAbout();
}

interface AreaInterface {
    public function getArea();
}

class Rectangle extends Figure implements AreaInterface {
    private $a;
    private $b;
    const SIDES_COUNT = 4;

    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function getArea() {
        $this->area = $this->a * $this->b;
        return $this->area;
    }

    public function infoAbout() {
        return "Это класс прямоугольника. У него " . self::SIDES_COUNT . " стороны.";
    }
}

class Square extends Figure implements AreaInterface {
    private $a;
    const SIDES_COUNT = 4;

    public function __construct($a) {
        $this->a = $a;
    }

    public function getArea() {
        $this->area = $this->a * $this->a;
        return $this->area;
    }

    public function infoAbout() {
        return "Это класс квадрата. У него " . self::SIDES_COUNT . " стороны.";
    }
}

class Triangle extends Figure implements AreaInterface {
    private $a;
    private $b;
    private $c;
    const SIDES_COUNT = 3;

    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getArea() {
        $p = ($this->a + $this->b + $this->c) / 2;
        $this->area = sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
        return $this->area;
    }

    public function infoAbout() {
        return "Это класс треугольника. У него " . self::SIDES_COUNT . " стороны.";
    }
}

$rect1 = new Rectangle(10, 5);
$rect2 = new Rectangle(7, 3);

echo "<h3>Прямоугольники</h3>";
echo "<p>" . $rect1->infoAbout() . " Площадь: " . $rect1->getArea() . "</p>";
echo "<p>" . $rect2->infoAbout() . " Площадь: " . $rect2->getArea() . "</p>";

$square1 = new Square(4);
$square2 = new Square(6.5);

echo "<h3>Квадраты</h3>";
echo "<p>" . $square1->infoAbout() . " Площадь: " . $square1->getArea() . "</p>";
echo "<p>" . $square2->infoAbout() . " Площадь: " . $square2->getArea() . "</p>";

$tri1 = new Triangle(3, 4, 5);
$tri2 = new Triangle(5, 5, 6);

echo "<h3>Треугольники</h3>";
echo "<p>" . $tri1->infoAbout() . " Площадь: " . $tri1->getArea() . "</p>";
echo "<p>" . $tri2->infoAbout() . " Площадь: " . $tri2->getArea() . "</p>";