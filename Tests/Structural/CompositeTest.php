<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Structural\Composite\BigBox;
use Structural\Composite\GiftProduct;
use Structural\Composite\Product;

class CompositeTest extends TestCase
{
    public function testCanGetTotalPriceOfBigBox()
    {
        $product1 = new Product(100);
        $product2 = new GiftProduct(100, 100);
        $bigBox = new BigBox([$product1, $product2]);

        $this->assertEquals(300, $bigBox->getPrice());
    }

    public function testCanAddProductsToBigBox()
    {
        $product1 = new Product(100);
        $product2 = new GiftProduct(100, 100);
        $bigBox = new BigBox([$product1]);
        $bigBox->add($product2);

        $this->assertEquals(300, $bigBox->getPrice());
    }

    public function testCanRemoveProductsFromBigBox()
    {
        $product1 = new Product(100);
        $product2 = new GiftProduct(100, 100);
        $bigBox = new BigBox([$product1,$product2]);
        $bigBox->remove($product2);

        $this->assertEquals(100, $bigBox->getPrice());
    }
}