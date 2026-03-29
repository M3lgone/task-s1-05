<?php

require_once 'Animal.php';
require_once 'Cat.php';
require_once 'Dog.php';


$dog1 = new Dog("Rex");
$cat1 = new Cat("Snowball");

echo $dog1->makeSound() . PHP_EOL;
echo $cat1->makeSound() . PHP_EOL;
