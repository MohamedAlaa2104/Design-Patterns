<?php

namespace Structural\Composite;

class GiftProduct implements GiftInterface, ProductInterface
{
    private int $price;
    private int $giftPrice;

    public function __construct(int $price, int $giftPrice)
    {
        $this->price = $price;
        $this->giftPrice = $giftPrice;
    }

    public function getGiftPrice() : int
    {
        return $this->giftPrice;
    }

    public function getPrice() : int
    {
        return $this->getGiftPrice() + $this->price;
    }
}