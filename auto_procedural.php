<?php
require_once 'Automobile-example.php';

//objects are state and behavior

$ryanCar = new Automobile(‘hyundai’, ‘sonata’, 'Ryan')
$danielCar = new Automobile(‘hyundai’, ‘sonata’,'Daniel')
$ryanCar -> speedUp(10);
$ryanCar -> speedUp(10);
//echo $car->speed;
$ryanCar->applyBrakes(20);

var_dump($ryanCar);
var_dump($danielCar);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

</body>
</html>