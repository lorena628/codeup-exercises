<?php
//these are arrays
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

//this check-function will go through $names array and will go through and search for a name that is actually present and if it is will output 1 for true and nothing if it is not present, it is called at the bottom after both functions as echo check($names, ('a name of your choosing'))
function check($names, $name)
{
    //the ===false is if the name that is being searched is equivalent in both type and value...in this case 'Tina' is at index of zero, being so, 'Tina' is not false so we have to put === so it is not mistaken as false which would happen if it was == ...it is a static check
    if(array_search($name, $names)===false){
    return false ; //dont return a string
    }else {
        return true ;//dont return a string
    }
}
//this compare function is using $count to return number of values in common between the 2 arrays but is not necessarily "comparing"
function compare($names, $compare)
{
    $count=0;
    //this foreach is going through each array and going through $name of both arrays and will keep count of how many are similar and will add 1 to the value of count and at end of foreach will return the number of how many are in common 
    foreach ($names as $name) {
        //var_dump($name);
        if(check($compare, $name)){
            $count++;
            //var_dump($count);
        }
    }
    //returning the number of how many are common for both arrays
    return $count;
}

// this is calling the compare function and compares $names and $compare and will return number of values that are similar 
//the compare function IS using array_search because in the if-statement we're calling the search function which included the array_search function
echo compare($names, $compare) . PHP_EOL;
// if input 'Bob' for echo check...this echo will not return anything aka "false" because it's not in array of $names or $compare
echo check($names, 'Tina') . PHP_EOL;
// esentually if you echo check it is only to see if a name is present in the array or not
//way over the 140 character count for comments :)