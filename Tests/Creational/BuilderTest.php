<?php

namespace Tests;

use Creational\Builder\BMWCarBuilder;
use Creational\Builder\CarProducer;
use Creational\Builder\KIACarBuilder;
use Creational\Builder\Modules\BMWCar;
use Creational\Builder\Modules\KIACar;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{

    public function testCanProduceBMWCar() {
        $BMWBuilder = new BMWCarBuilder();
        $carProducer = new CarProducer($BMWBuilder);
        $myCar = $carProducer->produceCar();

        $this->assertInstanceOf(BMWCar::class, $myCar);
    }

    public function testCanProduceKIACar() {
        $KIABuilder = new KIACarBuilder();
        $carProducer = new CarProducer($KIABuilder);
        $myCar = $carProducer->produceCar();

        $this->assertInstanceOf(KIACar::class, $myCar);
    }
}