<?php

namespace Creational\AbstractFactory;

class CarAbstractFactory
{

    private $tax = 100000;
    private $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function createBWMCar() :BMWCar {
        return new BMWCar($this->price);
    }

    public function createKIACar() : KIACar {
        return new KIACar($this->price,$this->tax);
    }

}