<?php

    echo "Pick a starting number\n";   
    $userStart = trim(fgets(STDIN));
    
    if(!is_numeric($userStart)){
        echo "this is not a number\n";
    exit;
    }
    echo"Pick an ending number\n";
    $userEnd = trim(fgets(STDIN));
    if(!is_numeric($userEnd)){
        echo "this is not a number\n";
        exit;
    }  

for ($a = $userStart; $a <= $userEnd; $a++){
    echo "Your number is {$a}\n";
}