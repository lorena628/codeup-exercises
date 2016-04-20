<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];



function check($names, $name)
{
    if(array_search($name, $names)===false){
    return false;
    }else {
        return true;
    }
}
function compare($names, $compare)
{
    $count=0;
    foreach ($names as $name) {
        var_dump($name);
        if(check($compare, $name)){
            $count++;
            var_dump($count);
        }
    }
    return $count;
}
// this is calling the compare function and compares $names and   
// $compare and will return number of values that are similar 

//the compare function IS using array_search because in the if statement we're calling the search function which included the array_search function
echo compare($names, $compare) . PHP_EOL;
//this echo will not return anything aka "false" because it's not in 
//array of $names or $compare
echo check($names, 'Bob') . PHP_EOL;