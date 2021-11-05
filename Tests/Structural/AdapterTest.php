<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Structural\Adapter\Car;
use Structural\Adapter\NormalEngine;
use Structural\Adapter\TurboEngine;
use Structural\Adapter\TurboEnigneAdapter;

class AdapterTest extends TestCase
{
    public function testCanStartCarWithNormalEngine()
    {
        $engine = new NormalEngine();
        $car = new Car($engine);

        $this->assertEquals("Normal Engine Started" , $car->start());
    }

    public function testCanStartCarWithTerboEngine()
    {
        $engine = new TurboEngine();
        $adapter = new TurboEnigneAdapter($engine);
        $car = new Car($adapter);

        $this->assertEquals("Turbo Engine Started", $car->start());
    }
}