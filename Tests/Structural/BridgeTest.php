<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Structural\Bridge\BlueCar;
use Structural\Bridge\BMWCar;
use Structural\Bridge\KIACar;
use Structural\Bridge\RedCar;

class BridgeTest extends TestCase
{
    public function testCanCreateBlueBMWCar()
    {
        $color = new BlueCar();
        $car = new BMWCar($color);

        $this->assertEquals("The car type is BMW and the color is blue", $car->getProduct());
    }

    public function testCanCreateRedBMWCar()
    {
        $color = new RedCar();
        $car = new BMWCar($color);

        $this->assertEquals("The car type is BMW and the color is red", $car->getProduct());
    }

    public function testCanCreateBlueKIACar()
    {
        $color = new BlueCar();
        $car = new KIACar($color);

        $this->assertEquals("The car type is KIA and the color is blue", $car->getProduct());
    }

    public function testCanCreateRedKIACar()
    {
        $color = new RedCar();
        $car = new KIACar($color);

        $this->assertEquals("The car type is KIA and the color is red", $car->getProduct());
    }
}