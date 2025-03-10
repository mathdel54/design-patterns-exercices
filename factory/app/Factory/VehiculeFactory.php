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

    public static function getVehiculeByDistanceAndWeight($distance, $weight)
    {
        if ($weight > 200 && $distance >= 20) {
            return self::makeTruck(4, "diesel");
        }
        
        if ($weight > 20 && $distance >= 20) {
            return self::makeCar(1.5, "essence");
        }
        
        if ($distance <= 20) {
            return self::makeBicycle(0, "none");
        }
        
        return self::makeCar(1.5, "essence");
    }
}