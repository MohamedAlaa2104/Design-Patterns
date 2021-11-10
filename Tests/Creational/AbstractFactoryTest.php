<?php

namespace Tests;

use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\CarAbstractFactory;
use Creational\AbstractFactory\KIACar;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{

    public function testCanCreateBWMCar() {
        $carFactory = new CarAbstractFactory(300000);
        $newCar = $carFactory->createBWMCar();
        $this->assertInstanceOf(BMWCar::class, $newCar);
    }

    public function testCanCreateKIACar() {
        $carFactory = new CarAbstractFactory(100000);
        $newCar = $carFactory->createKIACar();
        $this->assertInstanceOf(KIACar::class, $newCar);
    }

}