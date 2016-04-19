<?php


//this first for loop prints out all even
for($i=1;$i <=100; $i++){
    echo "{$i}\n";
    if($i%2!=0){
    
    continue;
    }
        echo "^this is even \n";
}