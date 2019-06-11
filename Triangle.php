<?php


class Triangle extends Shape
{
    public $side1;
    public $side2;
    public $side3;

    public function __construct($side1, $side2, $side3)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function getPerimeter()
    {
        // TODO: Implement getPerimeter() method.
        return ($this->side1 + $this->side2 + $this->side3);
    }

    public function getHeight()
    {
        return 2 * ((sqrt($this->getPerimeter() * ($this->getPerimeter() - $this->side1) * ($this->getPerimeter() - $this->side2) * $this->getPerimeter() - $this->side3)) / $this->side1);
    }

    public function getArea()
    {
        // TODO: Implement getArea() method.
        return 1 / 2 * $this->side1 * $this->getHeight();
    }

    public function toString()
    {
        return ' side1: ' . $this->side1 . '<br>' . ' side2: ' . $this->side2 . '<br>' . ' side3: ' . $this->side3;
    }
}