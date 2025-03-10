<?php

namespace App\Factory;

use App\Entity\Truck;
use App\Entity\Bicycle;
use App\Entity\Car;

class VehiculeFactory
{
    public static function makeBicycle($cost, $fueltype)
    {
        return new Bicycle($cost, $fueltype);
    }

    public static function makeCar($cost, $fueltype)
    {
        return new Car($cost, $fueltype);
    }

    public static function makeTruck($cost, $fueltype)
    {
        return new Truck($cost, $fueltype);
    }
}