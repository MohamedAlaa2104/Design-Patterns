<?php

namespace Creational\FactoryMethod;

class KIAFactory implements BrandFactoryInterface
{

    public function buildBrand() : BrandInterface
    {
        // TODO: Implement buildBrand() method.
        return new KIABrand();
    }
}