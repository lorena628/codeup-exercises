<?php
require_once 'Rectangle.php';
require_once 'Square.php';

$rectangle = new Rectangle(10, 3);
echo $rectangle ->area() . PHP_EOL;


$square = new Square(2 , 2);
echo "perimeter of a square with side of 2 is " . $square -> perimeter() . PHP_EOL;


$square = new Square(3 , 2);
echo  $square -> area() . PHP_EOL;

$square = new Square(3 , 2);
echo  $square -> perimeter() . PHP_EOL;