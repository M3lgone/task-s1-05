<?php

require_once 'Circle.php';
require_once 'Triangle.php';
require_once 'Rectangle.php';


interface CalculateArea
{
    public function getArea(): float;
}
