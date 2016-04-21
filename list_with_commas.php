<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicistsArray = explode (', ', $physicistsString);
//making this function more general so it can apply anywhere
function humanizedList($array)
{
    asort($array);
    $lastItem = array_pop($array);
    $nameString = implode(', ', $array);
    $readableList = $nameString . ', ' . ' and ' . $lastItem;
    return $readableList;
}
//this is resetting a variable of $readable list to call function human...and the array prior to function will be passed in the parameters
$readableList = humanizedList($physicistsArray);
echo "Some of the most famous physicists are $readableList." . PHP_EOL;
//var_dump($readableList);
// $fakePhysicists = humanizedList($physicistsArray);
// echo "Some of the most famous fake physicists are $fakePhysicists";

