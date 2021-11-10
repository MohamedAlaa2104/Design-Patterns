<?php

namespace Structural\Bridge;

class BMWCar extends Car
{
    public function __construct(CarColor $color)
    {
        parent::__construct($color);
    }

    public function getProduct() : string
    {
        return sprintf("The car type is %s and the color is %s", 'BMW', $this->color->getColor());
    }
}