<?php

// On require le fichier qui contient la classe Car
require_once  __DIR__ . '/../src/Car.php';


// On instancie un objet à partir de la classe Car
$firstCar = new Car("BMW", "Petrol");

// Affiche la couleur de la voiture "Grey" par défaut
//echo $firstCar->color; // Doit normalement retourner "Grey"

echo $firstCar->getColor() . "<br>";
$firstCar->setColor("Black"); // On change la couleur "Grey" par "Black"
echo $firstCar->getColor() . "<br>";


// On instancie un second objet à partir de la classe Car
$secondCar = new Car("Audi", "Electric", "Red");
echo $secondCar->speak('en') . '<br>';