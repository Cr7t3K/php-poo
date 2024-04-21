<?php
namespace App;

// On crée la classe Car grâce au mot-clé 'class'
class Car {

    // Ci-dessous, on ajoute des propriétés à notre classe
    private $color;
    private $brand;
    private $energy;
    private $speed = 0;

    public function __construct($brand, $energy, $color = "Grey") {
        $this->brand = $brand;
        $this->color = $color;
        $this->setEnergy($energy);
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }


    public function setEnergy($energy) {
        switch (strtolower($energy)) {
            case "petrol":
            case "gasoil":
            case "electric":
                $this->energy = $energy;
                break;
            default:
                throw new InvalidArgumentException("Invalid energy type provided. Allowed types are: 'petrol', 'gasoil', 'electric'.");
        }
    }

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