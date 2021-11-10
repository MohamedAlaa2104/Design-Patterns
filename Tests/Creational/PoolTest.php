<?php

namespace Tests;

use Creational\Pool\CarPool;
use PHPUnit\Framework\TestCase;

class PoolTest extends TestCase
{
    public function testCanGetCar() : void
    {
        $carPool = new CarPool();
        $car = $carPool->getCar();

        $this->assertEquals(1, $carPool->countOccupiedCars());
        $this->assertEquals(0, $carPool->countFreeCars());
        $this->assertEquals(1, $carPool->countTotalCars());
    }

    public function testCanDisposeCar() : void
    {
        $carPool = new CarPool();
        $car = $carPool->getCar();

        $carPool->dispose($car);

        $this->assertEquals(0, $carPool->countOccupiedCars());
        $this->assertEquals(1, $carPool->countFreeCars());
        $this->assertEquals(1, $carPool->countTotalCars());
    }
}