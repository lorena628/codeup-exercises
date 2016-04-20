<?php


//this first for loop prints out all even using continue
for($i=1;$i <=100; $i++){
    //this echo will print out all numbers
    echo "{$i}\n";
    //this if statement puts condition if odd continue if it is even go to second echo and outputs as even
    if($i%2!=0){
        continue;
    }
    echo "^this is an even number \n";
}

//this second for loop uses break to stop at 10
// for($i=1;$i <=100; $i++){
//     echo "{$i}\n";
//     if ($i == 10) {
//         break; //this will stop the loop 
//     }    
// }
