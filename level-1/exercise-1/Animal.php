<?php

require_once 'Cat.php';
require_once 'Dog.php';

abstract class Animal
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function makeSound();

}
