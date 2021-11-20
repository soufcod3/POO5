<?php

require_once 'Vehicle.php';
require_once 'Interfaces/LightableInterface.php';

class Bike extends Vehicle implements LightableInterface
{
    protected string $type = 'bike';
    //POO5
    public function switchOn(): bool
    {
        if ($this->getCurrentSpeed() > 10) {
            return true;
        }
    }
    //POO5
    public function switchOff(): bool
    {
        return false;
    }
}