<?php

use App\Factory\VehiculeFactory;

require('../vendor/autoload.php');

# Essayer d'utiliser votre factory ici

$bicycle = VehiculeFactory::makeBicycle(0,'none');

echo $bicycle->getCostPerKm();
echo $bicycle->getFuelType() . "<br>";

$truck = VehiculeFactory::makeTruck(2.124,'Diesel');

echo $truck->getCostPerKm();
echo $truck->getFuelType() . "<br>";

$car = VehiculeFactory::makeCar(1.89,'Essence');

echo $car->getCostPerKm();
echo $car->getFuelType() . "<br>";

$vehicule = VehiculeFactory::getVehiculeByDistanceAndWeight(47,256);

echo $vehicule::class . "<br>";
echo $vehicule->getCostPerKm() . "<br>";
echo $vehicule->getFuelType();