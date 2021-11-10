<?php

namespace Tests;

use Creational\SimpleFactory\Car;
use Creational\SimpleFactory\SimpleFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testCanCreateCarFromSimpleFactoryClass()
    {
        $factory = new SimpleFactory();
        $car = $factory->createCar();

        $this->assertInstanceOf(Car::class, $card);
    }
}