<?php


require_once 'Bicycle.php';
require_once 'Car.php';

$car = new Car('blue', 5, 'gasoline');
var_dump($car);

echo $car->start();

$car->accelerate(20);
var_dump($car);

echo $car->brake(20);
var_dump($car);

$car2 = new Car('yellow', 2, 'electricity');
var_dump($car2);

echo $car2->start();

$car2->accelerate(20);
var_dump($car2);

echo $car2->brake(20);
var_dump($car2);

$bicycle = new Bicycle('red', 1, 'mecanical');
var_dump($bicycle);
