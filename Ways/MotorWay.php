<?php

final class MotorWay extends HighWay
{
    protected const UNALLOWED_VEHICLES = [
        'bike',
        'skateboard',
    ];
    private int $nbLanes = 4;
    private int $maxSpeed = 130;

    public function addVehicle(Vehicle $vehicle): string
    {
        echo "Let's try adding a " . $vehicle->getType() . "." . PHP_EOL;
        if (in_array($vehicle->getType(), self::UNALLOWED_VEHICLES)) {
            return "Sorry, the " . $vehicle->getType() . " is not allowed in Motorway.";
        } else {
            array_push($this->currentVehicles, $vehicle->getType());
            return "The " . $vehicle->getType() . " is now on Motorway.";
        }
    }
}