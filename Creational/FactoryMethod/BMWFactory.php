<?php

namespace Creational\FactoryMethod;

class BMWFactory implements BrandFactoryInterface
{

    public function buildBrand() : BrandInterface
    {
        // TODO: Implement buildBrand() method.
        return new BMWBrand();
    }
}