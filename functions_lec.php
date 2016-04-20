<?php
//function syntax for php
function sayHello()
{
    return "Hello Codeup!";
}
//calling function w/new line concatenated on it
//NEVER echo inside a function
// ---------------------------------------
//this is an in class example
function add($a, $b)
{
    $result = $a + $b;
    return $result
}


$result1 = add(1212, 123434);
$result2 = add(45385, 3435);
$greeting = sayHello() . " this string is concatenated";


echo sayHello() . PHP_EOL;
echo add(5, 12) * add(6, 4) . PHP_EOL;
echo add($result1, $result2) . PHP_EOL;
echo $greeting . PHP_EOL;















// $a = 59;
// $b = 4969;
// function addGlobal()
// {
//     return $a + $b;
// }
// echo addGlobal(). PHP_EOL;