<?php

require_once 'CalculateArea.php';
require_once 'Triangle.php';
require_once 'Rectangle.php';
require_once 'Circle.php';



$triangle1 = new Triangle(2, 5);
$rectangle1 = new Rectangle(2, 4);
$circle1 = new Circle(5);


echo "Area of triangle : " . $triangle1->getArea() . PHP_EOL;
echo "Area of rectangle : " . $rectangle1->getArea() . PHP_EOL;
echo "Area of circle : " . $circle1->getArea() . PHP_EOL;
