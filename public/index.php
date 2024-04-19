<?php

// On require le fichier qui contient la classe Car
require_once  __DIR__ . '/../src/Car.php';



// On instancie un objet à partir de la classe Car
$firstCar = new Car();

$firstCar->color = "Black";
$firstCar->brand = "BMW";
echo $firstCar->speak() . '<br>'; // Affiche le message en francais car 'fr" est la valeur par default de la méthode.
echo $firstCar->speak('en') . '<br>'; // Affiche le message en anglais, car on lui donne comme argument 'en' qui n'est donc pas 'fr'.

// On instancie un second objet à partir de la classe Car
$secondCar = new Car();
$secondCar->color = "Red";
$secondCar->brand = "Audi";
echo $secondCar->speak('en') . '<br>';