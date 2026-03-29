<?php

require_once 'CalculateArea.php';

class Triangle implements CalculateArea
{
    public function __construct(
        public float $width,
        public float $height
    ) {
    }

    public function getArea(): float
    {
        return ($this->width * $this->height) / 2;
    }
}
