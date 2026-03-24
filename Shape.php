<?php

require_once 'Triangle.php';
require_once 'Rectangle.php';

abstract class Shape
{
    public function __construct(
        public float $width,
        public float $height
    ) {
    }
    abstract public function getArea(): float;
}
