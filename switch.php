<?php

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

//this is switch case
switch($dayOfWeek) {
    case 1:
        echo "It's Monday \n";
        break;
    case 2:
        echo "It's Tuesday \n";
        break;
    case 3:
        echo "It's Wednesday \n";
        break;
    case 4:
        echo "It's Thursday \n";
        break;
    case 5: 
        echo "It's Friday \n";
        break;
    case 6: 
        echo "It's Saturday \n";
        break;
    case 7: 
        echo "It's Sunday \n";
        break;
} 
//this does the same thing as switch case
 if($dayOfWeek==1){
    echo "It's monday \n";
 }elseif($dayOfWeek==2){
    echo "It's tuesday \n";
 }elseif($dayOfWeek==3){
    echo "It's wednesday \n";
 }elseif($dayOfWeek==4){
    echo "It's thursday \n";
 }elseif($dayOfWeek==5){
    echo "It's friday \n";
 }elseif($dayOfWeek==6){
    echo "It's saturday \n";
 }elseif($dayOfWeek==7){
    echo "It's sunday \n";
 }
