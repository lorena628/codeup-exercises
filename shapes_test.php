<?php
require_once 'Rectangle.php';
require_once 'Square.php';

// $rectangle = new Rectangle(10, 3);
// echo "area of a rectangle with w of 10 and h of 3 is " . $rectangle->area() . PHP_EOL;

// $rectangle = new Rectangle(10, 0);
// echo "area of a rectangle with w of 10 and h of 0 is " . $rectangle->area() . PHP_EOL;
 

// $square = new Square(2, 0);
// echo "perimeter of a square with side of 2 is " . $square->perimeter() . PHP_EOL;


// $square = new Square(3 , 2);
// echo "\"area\" of a square with w of 3 and h of 2 is " . $square->area() . PHP_EOL;
// echo "the perimeter of square is " . $square->perimeter() . PHP_EOL;


$rectangle = new Rectangle(10, 3);
echo "area of a rectangle 10 X 3 = " . $rectangle->setArea() . PHP_EOL;
echo "perimeter of a rectangle 10 X 3 = " . $rectangle->setPerimeter() . PHP_EOL;



$square = new Square(2, 0);
echo "perimeter of a square with side of 2 is = " . $square->setPerimeter() . PHP_EOL;
echo "area of a square with side of 2 is = " . $square->setArea() . PHP_EOL;


