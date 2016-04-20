<?php

//these variables cannot be called from inside the function, they are
//global but if you move inside the function they will be modified

// $a = 6;
// $b = 3;
function add($a, $b)
{
    if(is_numeric($a) && is_numeric($b)){
        return $a + $b;    
    }else {
        return throwErrorMessage($a, $b);
    }
}
function subtract($a, $b)
{
    if(is_numeric($a) && is_numeric($b)){ 
        return $a - $b;
    }else {
        return throwErrorMessage($a, $b);
    }
}
function multiply($a, $b)
{   
    if(is_numeric($a) && is_numeric($b)){
        return $a * $b;
    }else {
        return throwErrorMessage($a, $b);
    }
}
function divide($a, $b)
{
    if(is_numeric($a) && is_numeric($b)){
        if($b==0){
            return "ERROR: Cannot divide by zero";
        }
        return $a / $b;
    }else {
        return throwErrorMessage($a, $b);
    }
}
function modulus($a, $b)
{   
    if(is_numeric($a) && is_numeric($b)){
        return $a % $b;
    }else {
        return throwErrorMessage($a, $b);
    }   
}
function throwErrorMessage($a, $b)
{
    return "ERROR: Arguments must be numeric, you entered {$a} and {$b}";
}
// Add code to test your functions here
echo add(5, 5) . PHP_EOL;
echo subtract(10 , 5) . PHP_EOL;
echo multiply(5, 20) . PHP_EOL;
echo divide(90, 0) . PHP_EOL;
echo modulus(20, 3) . PHP_EOL;