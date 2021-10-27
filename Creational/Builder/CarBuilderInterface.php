<?php

namespace Creational\Builder;

use Creational\Builder\Modules\Car;

interface CarBuilderInterface
{

    public function createCar();
    public function addEngine();
    public function addBody();
    public function addDoors();
    public function addWheels();
    public function getCar() : Car;

}