<?php

namespace Creational\Builder;

use Creational\Builder\Modules\Car;

class CarProducer
{

    /**
     * @var CarBuilderInterface
     */
    private $builder;

    public function __construct(CarBuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function produceCar() : Car{
        $this->builder->createCar();
        $this->builder->addBody();
        $this->builder->addEngine();
        $this->builder->addDoors();
        $this->builder->addWheels();

        return $this->builder->getCar();
    }

}