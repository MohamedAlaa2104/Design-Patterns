<?php

namespace Creational\Builder;

use Creational\Builder\Modules\BMWCar;
use Creational\Builder\Modules\Car;

class BMWCarBuilder implements CarBuilderInterface
{

    /**
     * @var Car
     */
    private $type;

    public function createCar()
    {
        $this->type = new BMWCar();
    }

    public function addEngine()
    {
        $this->type->setPart('engine', 'engine');
    }

    public function addBody()
    {
        $this->type->setPart('body', 'body');
    }

    public function addDoors()
    {
        $this->type->setPart('doors', 'doors');
    }

    public function addWheels()
    {
        $this->type->setPart('wheels', 'wheels');
    }

    public function getCar() : Car
    {
        return $this->type;
    }

}