<?php


//reference list_with_commas.php and merge-arrays.php for a combo of both things

function parseContacts($filename)
{

    $handle = fopen($filename, 'r');

    $contents = fread($handle, filesize($filename));

    //this is converting $contents into an array 
    $array = explode("\n",  $contents);

    //this is adding the new line ar the end of each string onto an array
    array_pop($array);

    $filename = 'contacts.txt';

    //this is going to be where we put the new contacts, it'll hold it for time being
    $newContacts = [];

    fclose($handle); 


    //$variable = $array and $name = $key in this foreach
    foreach ($array as $name) {

        //the placeholder for new array
        $newArray=[];

        //new variable where the pipe will be the breaking point of key  
        $persInfo = explode("|", $name);

        //$persName is now persons info in the array and will start at index of zero
        $persName = $persInfo[0];

        //doing 2 things at once conc and also assiging person information to person Numb
        //this is concat the dashes for the phone nmbers and also creating a varaiable to "store" the numbers within the array (look at the output)
        $persNumb = substr($persInfo[1], 0,3) . "-" .substr($persInfo[1], 3, 3) . "-" . substr($persInfo[1], 6,4);

        //now the $newArray will contain the persons 'name' in the array with value being $persName; 'number' in the array  will be value of $persNumb
        $newArray= ["name" => $persName, "number" => $persNumb];

        //pushing $newArray into the $newContacts suggest looking at the output to grasp whats being pushed onto where
        array_push($newContacts, $newArray);
    }
    //todo - read file and parse contacts
    return $newContacts;
}
//
var_dump(parseContacts('contacts.txt'));
