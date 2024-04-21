<?php

// On require le fichier qui contient la classe Car
require_once  __DIR__ . '/../src/Car.php';
require_once  __DIR__ . '/../src/library/Car.php';
use App\Car;
use App\Library\Car as LibraryCar;


// On instancie un objet à partir de la classe Car
$firstCar = new Car("BMW", "Petrol"); // Fatal error: Cannot declare class Car, because the name is already in use
$secondCar = new Car("Audi", "Petrol"); // Fatal error: Cannot declare class Car, because the name is already in use


$firstCar = new Car("BMW", "Petrol"); // Good
$secondCar = new LibraryCar("Audi", "Electric"); // Good