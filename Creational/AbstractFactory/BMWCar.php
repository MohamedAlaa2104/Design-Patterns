<?php

namespace Creational\AbstractFactory;

class BMWCar implements CarInterface
{


    private $price;

    /**
     * @param $price
     */
    public function __construct($price)
    {
        $this->price = $price;
    }

    public function calculatePrice()
    {
        return $this->price + 120000;
    }
}