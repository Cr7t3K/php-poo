<?php
namespace App;

require_once 'Vehicle.php';
use App\Vehicle;

class Plane extends Vehicle
{
    private int $wingsNumber;           // Nombre d'ailes
    private float $wingspan;            // Envergure de l'aile
    private int $maxAltitude;           // Altitude max
    private string $landingGearType;    // Type de train d'atterrissage ==> "tricycle", "retractable"
    private string $flapsPosition;      // Position des volets ==> "retracted", "extended"
    private bool $blackBox = false;     // L'avion a t'il une boite noir
    private int $capacity;              // Capacité de stockage

    public function __construct(
        string $brand,
        string $model,
        string $color,
        int    $wingsNumber,
        float  $wingspan,
        int    $maxAltitude,
        string $landingGearType,
        string $flapsPosition,
        bool   $blackBox,
        int    $capacity
    ) {
        parent::__construct($brand, $model, $color);
        $this->wingsNumber = $wingsNumber;
        $this->wingspan = $wingspan;
        $this->maxAltitude = $maxAltitude;
        $this->landingGearType = $landingGearType;
        $this->flapsPosition = $flapsPosition;
        $this->blackBox = $blackBox;
        $this->capacity = $capacity;
    }

    public function getWingsNumber(): int {
        return $this->wingsNumber;
    }

    public function setWingsNumber(int $wingsNumber): void {
        $this->wingsNumber = $wingsNumber;
    }

    public function getWingspan(): float {
        return $this->wingspan;
    }

    public function setWingspan(float $wingspan): void {
        $this->wingspan = $wingspan;
    }

    public function getMaxAltitude(): int {
        return $this->maxAltitude;
    }

    public function setMaxAltitude(int $maxAltitude): void {
        $this->maxAltitude = $maxAltitude;
    }

    public function getLandingGearType(): string {
        return $this->landingGearType;
    }

    public function setLandingGearType(string $landingGearType): void {
        $this->landingGearType = $landingGearType;
    }

    public function getFlapsPosition(): string {
        return $this->flapsPosition;
    }

    public function setFlapsPosition(string $flapsPosition): void {
        $this->flapsPosition = $flapsPosition;
    }

    public function isBlackBox(): bool {
        return $this->blackBox;
    }

    public function setBlackBox(bool $blackBox): void {
        $this->blackBox = $blackBox;
    }

    public function getCapacity(): int {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): void {
        $this->capacity = $capacity;
    }

    public function openParachute(): void {
        echo "Parachute ouvert !";
    }

    public function deployLandingGear(): void {
        echo "Train d'atterrissage déployer !";
    }
}