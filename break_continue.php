<?php


//this first for loop prints out all even using continue
// for($i=1;$i <=100; $i++){
//     echo "{$i}\n";
//     if($i%2!=0){
    
//     continue;
//     }
//         echo "^this is even \n";
// }

//this second for loop uses break to stop at 10
for($i=1;$i <=100; $i++){
    echo "{$i}\n";
    if ($i == 10) {
        break;
    }    
}
