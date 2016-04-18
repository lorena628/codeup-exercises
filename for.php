<?php

echo "Pick a starting number\n";   
//user start input
$userStart = trim(fgets(STDIN));
if(!is_numeric($userStart)){
    echo "this is not a number\n";
    //default start
    $userStart = 2;
}
//user end input
echo"Pick an ending number\n";
$userEnd = trim(fgets(STDIN));
if(!is_numeric($userEnd)){
    echo "this is not a number\n";
    //default end
    $userEnd = 100;
} 
//increment count
echo "Count by increments of what? \n";
$userCount = trim(fgets(STDIN));
if(!is_numeric($userCount)){
    echo "this is not a number\n";
    //default increment
    $userCount=1;
}   
//for loop
for ($a = $userStart; $a <= $userEnd; $a+=$userCount){
    echo "Your number is {$a}\n";
}