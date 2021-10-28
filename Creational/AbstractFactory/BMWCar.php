<?php

namespace Creational\AbstractFactory;

class BMWCar implements CarInterface
{

    private int $price;

    /**
     * @param $price
     */
    public function __construct($price)
    {
        $this->price = $price;
    }

    public function calculatePrice() : int
    {
        return $this->price + 120000;
    }
}