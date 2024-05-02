<?php
namespace App;

require_once 'Vehicle.php';
use App\Vehicle;

class Boat extends Vehicle
{
    private string $hullType;       // Type de coque =>  "monocoque", "catamaran", "trimaran".
    private int $deckCount;         // Nombre de ponts
    private int $capacity;          // Capacité en personnes
    private int $ballasts = 0;      // Nombre de ballasts
    private int $draft;             // Tirant d'eau en pieds
    private int $beam;              // Largeur
    private bool $keel = false;     // Quille
    private bool $anchorNumber;     // Nombre d'ancre

    public function __construct(
        string $brand,
        string $model,
        string $color,
        string $hullType,
        int    $deckCount,
        int    $capacity,
        int    $ballasts,
        int    $draft,
        int    $beam,
        bool   $keel,
        bool   $anchorNumber
    ) {
        parent::__construct($brand, $model, $color);

        $this->hullType = $hullType;
        $this->deckCount = $deckCount;
        $this->capacity = $capacity;
        $this->ballasts = $ballasts;
        $this->draft = $draft;
        $this->beam = $beam;
        $this->keel = $keel;
        $this->anchorNumber = $anchorNumber;
    }

    public function getHullType(): string {
        return $this->hullType;
    }

    public function setHullType(string $hullType): void {
        $this->hullType = $hullType;
    }

    public function getDeckCount(): int {
        return $this->deckCount;
    }

    public function setDeckCount(int $deckCount): void {
        $this->deckCount = $deckCount;
    }

    public function getCapacity(): int {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): void {
        $this->capacity = $capacity;
    }

    public function getBallasts(): int {
        return $this->ballasts;
    }

    public function setBallasts(int $ballasts): void {
        $this->ballasts = $ballasts;
    }

    public function getDraft(): int {
        return $this->draft;
    }

    public function setDraft(int $draft): void {
        $this->draft = $draft;
    }

    public function getBeam(): int {
        return $this->beam;
    }

    public function setBeam(int $beam): void {
        $this->beam = $beam;
    }

    public function isKeel(): bool {
        return $this->keel;
    }

    public function setKeel(bool $keel): void {
        $this->keel = $keel;
    }

    public function isAnchorNumber(): bool {
        return $this->anchorNumber;
    }

    public function setAnchorNumber(bool $anchorNumber): void {
        $this->anchorNumber = $anchorNumber;
    }

    public function dropAnchor(): void {
        if ($this->anchorNumber > 0) {
            echo "Ancre larguée.";
        } else {
            echo "Le bateau n'a pas d'ancre.";
        }
    }

    public function raiseAnchor(): void {
        if ($this->anchorNumber > 0) {
            echo "Ancre relevée.";
        } else {
            echo "Le bateau n'a pas d'ancre.";
        }
    }
}