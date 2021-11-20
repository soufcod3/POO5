<?php

abstract class HighWay
{
    protected array $currentVehicles = [];
    private int $nbLanes;
    private int $maxSpeed;

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function getNbLanes(): string
    {
        return $this->nbLanes;
    }

    public function setNbLanes($number): void
    {
        $this->nbLanes = $number;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed($number): void
    {
        $this->maxSpeed = $number;
    }

    abstract function addVehicle(Vehicle $vehicle);
}