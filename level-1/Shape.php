<?php

require_once 'Triangle.php';
require_once 'Rectangle.php';

abstract class Shape
{
    abstract public function getArea(): float;
}
