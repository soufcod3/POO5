<?php

final class ResidentialWay extends HighWay
{
    protected int $nbLanes = 2;
    protected int $maxSpeed = 50;
    protected const ALLOWED_VEHICLES = [
        'car',
        'truck',
        'bike',
        'skateboard',
    ];

    public function addVehicle(Vehicle $vehicle): string
    {
        echo "Let's try adding a " . $vehicle->getType() . "." . PHP_EOL;
        if (in_array($vehicle->getType(), self::ALLOWED_VEHICLES)) {
            array_push($this->currentVehicles, $vehicle->getType());
            return "The " . $vehicle->getType() . " is now on ResidentialWay.";
        } else {
            return "The " . $vehicle->getType() . " is not allowed in ResidentialWay.";
        }
    }
}