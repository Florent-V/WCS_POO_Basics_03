<?php 
require_once './Vehicle.php';
require_once './HighWay.php';
require_once './MotorWay.php';




$car1 = new Vehicle('blue', 4);
$car2 = new Vehicle('red', 5);

$a4 = new MotorWay();

var_dump($a4);

$a4->addVehicle($car1);

var_dump($a4);

$a4->addVehicle($car2);

var_dump($a4);


?>