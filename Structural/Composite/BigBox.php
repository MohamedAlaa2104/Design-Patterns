<?php

namespace Structural\Composite;

class BigBox implements ActionsInterface, ProductInterface
{
    /**
     * @var ProductInterface[]
     */
    private array $products;

    public function __construct(array $products)
    {
        $this->products = $products;
    }

    public function add(ProductInterface $product)
    {
        $this->products[] = $product;
    }

    public function remove(ProductInterface $product)
    {
        $this->products = array_filter($this->products, function ($productItem) use ($product) {
           if ($productItem != $product)
           {
               return $productItem;
           }
           return null;
        });
    }

    public function getPrice() : int
    {
        $totalPrice = 0;
        foreach ($this->products as $product)
        {
            $totalPrice += $product->getPrice();
        }
        return $totalPrice;
    }
}