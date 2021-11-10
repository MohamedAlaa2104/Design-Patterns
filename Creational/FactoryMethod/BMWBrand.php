<?php

namespace Creational\FactoryMethod;

class BMWBrand implements BrandInterface
{

    public function createBrand() : string
    {
        return "BMW Brand";
    }
}