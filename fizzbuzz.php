<?php

for ($i = 1; $i <= 100; $i++)
{
   if(($i%3==0) && ($i%5==0)){
    echo "fizz-buzz\n";
    }elseif($i%3==0) {
        echo "fizz\n";
    }elseif ($i%5==0) {
        echo "buzz\n";
    }elseif($i){
        echo "{$i}\n";
    }
}