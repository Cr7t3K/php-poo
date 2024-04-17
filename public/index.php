<?php

// On require le fichier qui contient la classe Car
require_once  __DIR__ . '/../src/Car.php';

// On instancie un premier objet à partir de la classe Car
$firstCar = new Car();

// On instancie un second objet à partir de la classe Car
$secondCar = new Car();

var_dump($firstCar, $secondCar);