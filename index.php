<?php
include 'Shape.php';
include 'Triangle.php';
$triangle = new Triangle(1, 2, 3);
echo ' Area: ' . $triangle->getArea() . '<br>';
echo ' Perimeter: ' . $triangle->getPerimeter() . '<br>';
echo ' ToString: ' . '<br>' . $triangle->toString();
