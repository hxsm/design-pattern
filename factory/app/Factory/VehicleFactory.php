<?php

namespace App\Factory;

use App\Entity\Bicycle;
use App\Entity\Car;
use App\Entity\Truck;

class VehicleFactory {
    public static function createVehicle($type) {
        switch ($type) {
            case 'bicycle':
                return new Bicycle(0.1, 'pedal');
            case 'car':
                return new Car(0.5, 'petrol');
            case 'truck':
                return new Truck(1.0, 'diesel');
            default:
                throw new \InvalidArgumentException("Invalid vehicle type");
        }
    }

    public static function createVehicleBasedOnDistanceAndWeight($distance, $weight) {
        if ($distance < 20) {
            return self::createVehicle('bicycle');
        } elseif ($weight > 200) {
            return self::createVehicle('truck');
        } elseif ($weight > 20) {
            return self::createVehicle('car');
        } else {
            return self::createVehicle('bicycle');
        }
    }
}