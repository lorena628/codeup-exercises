<?php

$x = 0;
$y = 5;
$z = 10;

// TODO:
if ($x<$y && $y<$z) {
echo "0 < 5 < 10 \n";
}
// If $x < $y < $z then echo "{$x} < {$y} < {$z}\n";

// TODO:
if(0<$x || $x<$z){
    echo "0 is less than 0 or 0 is less than 10\n";
}
// If 0 is less than $x OR $x is less than 10
// then echo the result as a sentence "0 is less than {$x} OR {$x} is less than 10".

// TODO:
if(0<$y || $y<$z) {
    echo "0 is less than 5 or 5 is less than 10\n";
}
if (0<$z || $z<$z) {
    echo "0 is less than 10 or 10 is less than 10\n";
}
// repeat the if statement for $y and $z.

// TODO:
if(0<$x && $x<10){
    echo "0 is less than 0 AND 0 is less than 10\n";
}
// If 0 is less than $x AND $x is less than 10
// then echo the result as a sentence "0 is less than {$x} AND {$x} is less than 10".

// TODO:
if(0<$y && $y<10){
    echo "0 is less than 5 AND 5 is less than 10 \n";
}
if(0<$z && $z<10){
    echo "0 is less than 10 AND 10 is less than 10\n";
}
// repeat the if statement for $y and $z.
