<?php

namespace App\Entity;

interface IVehicle {
    public function getCostPerKm();
    public function getFuelType();
}