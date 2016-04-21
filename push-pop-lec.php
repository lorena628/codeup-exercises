<?php


$items = ['First', 'Second', 'Third'];
array_push($items, 'New Value', 'another value', '39', true);
print_r($items);

$lastItem = array_pop($items);
print_r($items);
var_dump($lastItem);

array_unshift($items, 'First item', 'firster item', 'firstest item');
print_r($items);

$oldValue = array_shift($items);
print_r($items);
var_dump($oldValue);


//this will find out what the next index should be and we dont have to read the output and insert in manually in this way we let PHP do the work for us
$items[]='last thing';
print_r($items);