<?php

namespace Structural\Bridge;

class KIACar extends Car
{
    public function __construct(CarColor $color)
    {
        parent::__construct($color);
    }

    public function getProduct() : string
    {
        return sprintf("The car type is %s and the color is %s", 'KIA', $this->color->getColor());
    }
}