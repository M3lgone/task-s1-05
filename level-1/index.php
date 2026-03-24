<?php

require_once 'Triangle.php';
require_once 'Rectangle.php';
require_once 'Shape.php';
require_once 'Cat.php';
require_once 'Dog.php';
require_once 'Animal.php';



$dog1 = new Dog("Rex");
$cat1 = new Cat("Snowball");

echo $dog1->makeSound() . "<br>" . "<br>";
echo $cat1->makeSound() . "<br>" . "<br>";



echo "<br>" . "-------------" . "<br>" . "<br>";


$triangle1 = new Triangle(2, 5);
$rectangle1 = new Rectangle(2, 4);

echo "Area of triangle : " . $triangle1->getArea() . "<br>" . "<br>";
echo "Area of rectangle : " . $rectangle1->getArea() . "<br>";
