<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicistsArray = explode (', ', $physicistsString);
//making this function more general so it can apply anywhere
//the second parameter $asort=false is setting a default of not sorting 
function humanizedList($array, $asort=false)
{
    if($asort!=false){
        asort($array); 
        $lastItem = array_pop($array);
        $nameString = implode(', ', $array);
        $readableList = $nameString . ', ' . ' and ' . $lastItem;
        return $readableList;
    }else{
        $lastItem = array_pop($array);
        $nameString = implode(', ', $array);
        $readableList = $nameString . ', ' . ' and ' . $lastItem;
        return $readableList;
    }
}
//this is resetting a variable of $readable list to call function human...and the array prior to function will be passed in the parameters
// also if you dont put ($physicistsArray, true) and leave as ($physicistsArray); it will leave the default which is unsorted
$readableList = humanizedList($physicistsArray, true);
echo "Some of the most famous physicists are $readableList." . PHP_EOL;


