<?php

final class PedestrianWay extends HighWay
{
    protected int $nbLanes = 1;
    protected int $maxSpeed = 10;
    protected const ALLOWED_VEHICLES = [
        'bike',
        'skateboard',
    ];

    public function addVehicle(Vehicle $vehicle): string
    {
        echo "Let's try adding a " . $vehicle->getType() . "." . PHP_EOL;
        if (in_array($vehicle->getType(), self::ALLOWED_VEHICLES)) {
            array_push($this->currentVehicles, $vehicle->getType());
            return "The " . $vehicle->getType() . " is now on PedestrianWay.";
        } else {
            return "The " . $vehicle->getType() . " is not allowed in PedestrianWay.";
        }
    }

}