<?php

namespace Creational\FactoryMethod;

class KIABrand implements BrandInterface
{

    public function createBrand() : string
    {
        return "KIA Brand";
    }
}