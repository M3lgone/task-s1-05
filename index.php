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


?>