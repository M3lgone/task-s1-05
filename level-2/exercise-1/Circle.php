<?php

require_once 'CalculateArea.php';

class Circle implements CalculateArea
{
    public function __construct(
        public float $radius
    ) {
    }
    public function getArea(): float
    {
        return pi() * pow($this->radius, 2);
    }
}
