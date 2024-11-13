<?php
// Inheritance
class Animal {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }

    public function eat() {
        echo $this->name . " is eating.<br>";
    }

    public function sleep() {
        echo $this->name . " is Sleeping.<br>";
    }
}

class Cat extends Animal {
    public function meow() {
        echo $this->name . " saya meow!.<br>";
    }
}

class Dog extends Animal {
    public function bark() {
        echo $this->name . " sata woof!.<br>";
    }
}

$cat = new Cat("Whiskers");
$dog = new Dog("Buddy");

$cat->eat();
$dog->bark();
echo "<br>";
echo "<br>";
?>