<?php

namespace Structural\Composite;

class Product implements ProductInterface
{
    private int $price;

    public function __construct(int $price)
    {
        $this->price = $price;
    }

    public function getPrice() : int
    {
        return $this->price;
    }
}