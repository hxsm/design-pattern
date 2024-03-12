<?php
require('../vendor/autoload.php');
use App\Factory\VehicleFactory;

$bicycle = VehicleFactory::createVehicle('bicycle');
echo "Bicycle - Cost per km: {$bicycle->getCostPerKm()}, Fuel type: {$bicycle->getFuelType()}\n";

$car = VehicleFactory::createVehicle('car');
echo "Car - Cost per km: {$car->getCostPerKm()}, Fuel type: {$car->getFuelType()}\n";

$truck = VehicleFactory::createVehicle('truck');
echo "Truck - Cost per km: {$truck->getCostPerKm()}, Fuel type: {$truck->getFuelType()}\n";

$vehicleBasedOnDistanceAndWeight1 = VehicleFactory::createVehicleBasedOnDistanceAndWeight(15, 150);
echo "Vehicle based on distance and weight (15km, 150kg) - Type: " . get_class($vehicleBasedOnDistanceAndWeight1) . "\n";

$vehicleBasedOnDistanceAndWeight2 = VehicleFactory::createVehicleBasedOnDistanceAndWeight(25, 30);
echo "Vehicle based on distance and weight (25km, 30kg) - Type: " . get_class($vehicleBasedOnDistanceAndWeight2) . "\n";
