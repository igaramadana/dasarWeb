<?php 
// Abstraction
abstract class Shape2 {
    abstract public function calculateArea2();
}

class Circle2 extends Shape2 {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea2() {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle2 extends Shape2 {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea2() {
        return $this->width * $this->height;
    }
}

$circle = new Circle2(5);
$rectangle = new Rectangle2(4, 6);
echo "Area of Circle: " . $circle->calculateArea2() . "<br>";
echo "Area of Rectangle: " . $circle->calculateArea2() . "<br>";
?>