<?php

// On require le fichier qui contient la classe Car
require_once  __DIR__ . '/../src/Car.php';
require_once  __DIR__ . '/../src/library/Car.php';
require_once  __DIR__ . '/../src/Plane.php';
require_once  __DIR__ . '/../src/Boat.php';
use App\Car;
use App\Plane;
use App\Boat;
use App\Library\Car as LibraryCar;


// On instancie un objet à partir de la classe Car
$firstCar = new Car("BMW", "Petrol", "Petrol", 4, "Manual", 0, "Blue");
$firstCar->engageParkingBrake();

$secondCar = new Car("Audi", "Petrol", "Diesel", 4, "Auto", 0, "Blue");
$secondCar->setGearPosition(3);






$plane = new Plane("Airbus", "A380", "White", 2, 37, 13100, "retractable", "retracted", true, 520);
$plane->deployLandingGear();
$plane->openParachute();
$plane->setGearPosition(3); // Erreur, la classe Plane n'a pas cette méthode ; elle appartient à la classe Car.







$boat = new Boat("Royal Caribbean Cruise Line", "Symphony of the Seas", "White", "monocoque", 17, 6680, 8, 3, 1, true, 4);
$boat->dropAnchor();