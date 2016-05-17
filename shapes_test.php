<?php
require_once 'Rectangle.php';
require_once 'Square.php';

// $rectangle = new Rectangle(10, 3);
// echo "area of a rectangle 10 X 3 = " . $rectangle->setArea() . PHP_EOL;
// echo "perimeter of a rectangle 10 X 3 = " . $rectangle->setPerimeter() . PHP_EOL;



// $square = new Square(2, 0);
// echo "perimeter of a square with side of 2 is = " . $square->setPerimeter() . PHP_EOL;
// echo "area of a square with side of 2 is = " . $square->setArea() . PHP_EOL;

$rectangle = new Rectangle(10, 3);
echo 'The area is ' . $rectangle->area() . PHP_EOL;
echo 'The perimeter is ' . $rectangle->perimeter() . PHP_EOL;
$square = new Square(2);
echo 'The area is ' . $square->area() . PHP_EOL;
echo 'The perimeter is ' . $square->perimeter() . PHP_EOL;

