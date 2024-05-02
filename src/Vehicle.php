<?php

namespace App;

class Vehicle
{
    protected string $brand;    // Marque
    protected string $model;    // Modèle
    protected string $color;    // Couleur
    private int $speed = 0;     // Vitesse


    public function __construct(string $brand, string $model, string $color) {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }

    public function getBrand(): string {
        return $this->brand;
    }

    public function setBrand(string $brand): void {
        $this->brand = $brand;
    }

    public function getModel(): string {
        return $this->model;
    }

    public function setModel(string $model): void {
        $this->model = $model;
    }

    public function getSpeed(): int {
        return $this->speed;
    }

    public function setSpeed(int $speed): void {
        $this->speed = $speed;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }
}