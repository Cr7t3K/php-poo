<?php
namespace App;

require_once 'Vehicle.php';
use App\Vehicle;

class Car extends Vehicle {

    private string $energy;             // Type de carburant ==> "Petrol", "Diesel", "Electric"
    private int $wheels;                // Nombre de roues
    private string $transmissionType;   // Type de transmission ==> "automatique", "manuel"
    private int $gearPosition;          // Position de la vitesse
    private bool $brakeEngaged = true;  // Position de la vitesse

    public function __construct($brand, $model, $energy, $wheels, $transmissionType, $gearPosition, $color = "Grey") {
        parent::__construct($brand, $model, $color);

        $this->wheels = $wheels;
        $this->transmissionType = $transmissionType;
        $this->gearPosition = $gearPosition;
        $this->setEnergy($energy);
    }

    public function getWheels(): int {
        return $this->wheels;
    }

    public function setWheels(int $wheels): void {
        $this->wheels = $wheels;
    }

    public function getTransmissionType(): string {
        return $this->transmissionType;
    }

    public function setTransmissionType(string $transmissionType): void {
        $this->transmissionType = $transmissionType;
    }

    public function getEnergy(): string {
        return $this->energy;
    }

    final public function setEnergy($energy) {
        switch (strtolower($energy)) {
            case "petrol":
            case "diesel":
            case "electric":
                $this->energy = $energy;
                break;
            default:
                throw new \InvalidArgumentException("Invalid energy type provided. Allowed types are: 'petrol', 'gasoil', 'electric'.");
        }
    }

    public function getGearPosition(): int {
        return $this->gearPosition;
    }

    public function setGearPosition(int $gearPosition): void {
        $this->gearPosition = $gearPosition;
    }

    public function isBrakeEngaged(): bool {
        return $this->brakeEngaged;
    }

    public function setBrakeEngaged(bool $brakeEngaged): void {
        $this->brakeEngaged = $brakeEngaged;
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

    public function changeGear(int $gear): string {
        if ($gear <= 0 || $gear > 7) {
            return "Invalid gear.";
        }
        $this->setGearPosition($gear);
        return "Gear changed to $gear.";
    }

    public function engageParkingBrake() {
        $this->setGearPosition(0);
        $this->setBrakeEngaged(true);

        return "Parking brake engaged.";
    }

    public function disengageParkingBrake() {
        $this->setBrakeEngaged(false);

        return "Parking brake disengage.";
    }
}