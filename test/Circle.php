<?php

require_once 'CalculateArea.php';

class Circle implements CalculateArea
{
    public function __construct(
        public float $radious
    ) {
    }
    public function getArea(): float
    {
        return pi() * pow($this->radious, 2);
    }
}
