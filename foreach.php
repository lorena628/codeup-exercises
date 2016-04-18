<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $valType) {
    if(is_string($valType)){
        echo "{$valType} \n";
    }elseif (is_integer($valType)){
        echo "{$valType} ";
    }elseif (is_null($valType)){
        echo "{$valType}\n";
    }elseif(is_array($valType)) {
        //cannot print out nested array so need a new foreach to print out what's in the array
       foreach ($valType as $arrayItem) {
       echo "ARRAY item {$arrayItem}\n";    
       }
    }elseif(is_numeric($valType)) {
        echo "{$valType} \n";
    }elseif(is_bool($valType)) {
        echo "{$valType} \n";
    }
}


//this will show everything that is not an array or null
// foreach ($things as $valType) {
//     if(is_scalar($valType)){
//         echo "{$valType} \n";
//     }
// }