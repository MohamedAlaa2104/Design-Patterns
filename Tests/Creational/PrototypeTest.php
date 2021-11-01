<?php

namespace Tests;

use Creational\Prototype\BarBookPrototype;
use Creational\Prototype\BooBookPrototype;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testCanGetBarBook()
    {
        $barBook = new BarBookPrototype();

        for ($index = 1; $index <= 10; $index++){
            $newBook = clone $barBook;
            $newBook->setTitle('New Bar Book');
            $this->assertInstanceOf(BarBookPrototype::class, $newBook);
        }
    }

    public function testCanGetFooBook()
    {
        $barBook = new BooBookPrototype();

        for ($index = 1; $index <= 10; $index++){
            $newBook = clone $barBook;
            $newBook->setTitle('New Bar Book');
            $this->assertInstanceOf(BooBookPrototype::class, $newBook);
        }
    }
}