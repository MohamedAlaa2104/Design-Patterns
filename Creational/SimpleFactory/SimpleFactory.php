<?php

namespace Creational\SimpleFactory;

class SimpleFactory
{
    public function createCar() : Car
    {
        return new Car();
    }
}