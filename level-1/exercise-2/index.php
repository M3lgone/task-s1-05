<?php

require_once 'Shape.php';
require_once 'Triangle.php';
require_once 'Rectangle.php';


$triangle1 = new Triangle(2, 5);
$rectangle1 = new Rectangle(2, 4);

echo "Area of triangle : " . $triangle1->getArea() . PHP_EOL;
echo "Area of rectangle : " . $rectangle1->getArea() . PHP_EOL;
