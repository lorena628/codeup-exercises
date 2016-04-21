<?php
//for-each lecture
$names = [
    'lvillanueva'=>"Lorena",
    'mel'        =>"Melissa",
    'niknik'     =>"Nikki",
    'eddy'       =>"Edrick",
    'markymark'  =>"Marcus",
    'pancho'     =>"Pancho"
];
// for ($i=0; $i < count($names); $i++) {
//     $studentName = $names[$i];
//     echo "Hey everybody say hello to $studentName\n";
//     echo "hi $studentName\n";
//     echo "hi Dr.nick!\n";
// }
//this is for each is the same as the for loop with keys
foreach ($names as $userName => $studentName) {
    echo "Hey everybody, $studentName's username is $userName \n";
    // echo "hi $studentName\n";
    // echo "hi Dr.nick!\n";
}




// $a = 0;
// do {
//     $a++;
//     echo $a . PHP_EOL;
// } WHILE ($a < 3);

// $b= 0;
// while ($b<3) {
//     $b++;
//     echo $b . PHP_EOL;
// }