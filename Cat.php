<?php

require_once 'Animal.php';

class Cat extends Animal
{
    public function makeSound()
    {
        return "The $this->name, makes: Miau!";
    }
}
