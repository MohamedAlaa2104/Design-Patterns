<?php

namespace Creational\AbstractFactory;

class KIACar implements CarInterface
{

    private int $price;
    private int $tax;

    public function __construct($price, $tax)
    {
        $this->price = $price;
        $this->tax = $tax;
    }

    public function calculatePrice() : int
    {
        return $this->price + $this->tax + 200000;
    }
}