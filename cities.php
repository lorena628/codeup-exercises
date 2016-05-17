<?php
// name of the file
$filename = 'cities.txt';

// connection(bookmark) 'r'= reading only
// parameters are what we're doing (fopen = open) and
// what we're doing with it ('r'= reading only)
// $handle makes the connection 
$handle = fopen($filename, 'r');

//gets the contents of the file from the bookmark and will give all of its contents
// fread graps the contents after connection is made filesize is "how much" of it we are opening
$contents = fread($handle, filesize($filename)). PHP_EOL ;
echo $contents;

// fclose is necessary ALWAYS!
fclose($handle); 





// $array = explode("\n",  $contents);
// var_dump($array);

