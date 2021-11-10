<?php

namespace Structural\Bridge;

abstract class Car
{
    protected CarColor $color;

    public function __construct(CarColor $color)
    {
        $this->color = $color;
    }

    public abstract function getProduct();
}