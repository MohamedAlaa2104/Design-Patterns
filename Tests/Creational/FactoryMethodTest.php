<?php

namespace Tests;

use Creational\FactoryMethod\BMWBrand;
use Creational\FactoryMethod\BMWFactory;
use Creational\FactoryMethod\KIABrand;
use Creational\FactoryMethod\KIAFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanBuildBMWBrand()
    {
        $factory = new BMWFactory();
        $brand = $factory->buildBrand();

        $this->assertInstanceOf(BMWBrand::class, $brand);
        $this->assertEquals($brand->createBrand(), "BMW Brand");
    }

    public function testCanBuildKIABrand()
    {
        $factory = new KIAFactory();
        $brand = $factory->buildBrand();

        $this->assertInstanceOf(KIABrand::class, $brand);
        $this->assertEquals($brand->createBrand() , 'KIA Brand');
    }
}