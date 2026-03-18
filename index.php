<?php


abstract class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }
    abstract public function makeSound();

}

class Dog extends Animal {

     public function makeSound() {
        return "The $this->name, makes: Guau!";
    }
}

class Cat extends Animal {

    public function makeSound() {
        return "The $this->name, makes: Miau!";
    }
}


$dog1 = new Dog("Rex");
$cat1 = new Cat("Snowball");

echo $dog1->makeSound() . "<br>" . "<br>";
echo $cat1->makeSound() . "<br>" . "<br>";


echo "<br>" . "-------------" . "<br>" . "<br>";


class Shape {
    public $width;
    public $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
        }
}

class Triangle extends shape {

    public function area() {
        return ($this->width * $this->height) / 2;
    }
}

class Rectangle extends shape {

    public function area() {
        return ($this->width * $this->height);
    
    }
}

$triangle1 = new Triangle(2, 5);
$rectangle1 = new Rectangle(2,4);

echo "Area of triangle : " . $triangle1->area() . "<br>" . "<br>";
echo "Area of rectangle : " . $rectangle1->area() . "<br>";


?>