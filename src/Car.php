<?php

// On crée la classe Car grâce au mot-clé 'class'
class Car {

    // Ci-dessous, on ajoute des propriétés à notre classe
    public $color = "Grey";
    public $brand;
    public $energy;
    public $speed = 0;

    public function speak($lang = 'fr')
    {
        if($lang === 'fr') {
            $message = "Vroom vroom !!, ma couleur est ";
        } else {
            $message = "Vroom vroom !!, my color is ";
        }

        return $message . $this->color;
    }
}