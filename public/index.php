<?php

// On require le fichier qui contient la classe Car
require_once  __DIR__ . '/../src/Car.php';



// On instancie un objet à partir de la classe Car
$firstCar = new Car();

// Affichage de $firstCar avant la modification des propriétés
var_dump($firstCar);

//Modification des propriétés public
$firstCar->color = "Black";
$firstCar->brand = "BMW";

// Affichage de $firstCar aprés la modification des propriétés (La couleur n'est plus "Grey" mais "Black")
var_dump($firstCar);

echo "La marque de la voiture est: " . $firstCar->brand . "<br>"; // Affiche: BMW
echo "La couleur de cette voiture est: " . $firstCar->color . "<br>"; // Affiche: Black

