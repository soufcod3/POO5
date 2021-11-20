<?php

require_once 'Vehicle.php';
require_once 'Interfaces/LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{

    private const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private string $energy;
    private int $energyLevel;
    protected string $type = 'car';
    protected bool $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    // POO4 : updates Park Brake's state
    public function setParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start(): string
    {
        // POO4 : throws an Exception
        if ($this->getEnergy() === 'fuel') {
            if ($this->hasParkBrake) {
                throw new Exception("The park brake is ON !");
            }
            return "The car is starting !";
        } else {
            return "You better switch it on instead, it's electric !";
        }
    }

    //POO5
    public function switchOn(): bool
    {
        if ($this->getEnergy() === self::ALLOWED_ENERGIES[1]) {
            return true;
        }
    }
    //POO5
    public function switchOff(): bool
    {
        if ($this->getEnergy() === self::ALLOWED_ENERGIES[1]) {
            return false;
        }
    }
}