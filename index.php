<?php

require 'Vehicles/Car.php';
require 'Vehicles/Bike.php';

$mercedes = new Car('white', 5, 'electric');
echo $mercedes->switchOn() . PHP_EOL;
echo $mercedes->switchOff();

$decathlon = new Bike ('black', 1);
$decathlon->setCurrentSpeed(13);
echo $decathlon->switchOn();
echo $decathlon->switchOff();