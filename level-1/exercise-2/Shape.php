<?php

require_once 'Triangle.php';
require_once 'Rectangle.php';

abstract class Shape
{
    protected float $width;
    protected float $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    abstract public function getArea(): float;
}
