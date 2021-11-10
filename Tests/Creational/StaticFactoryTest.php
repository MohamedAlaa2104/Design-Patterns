<?php

namespace Tests;

use Creational\StaticFactory\BMWCar;
use Creational\StaticFactory\KIACar;
use Creational\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateBMWCar()
    {
        $this->assertInstanceOf(BMWCar::class, StaticFactory::factory('bmw'));
    }

    public function testCanCreateKIACar()
    {
        $this->assertInstanceOf(KIACar::class, StaticFactory::factory('kia'));
    }
}