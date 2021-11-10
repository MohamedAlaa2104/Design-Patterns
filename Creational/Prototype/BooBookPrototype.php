<?php

namespace Creational\Prototype;

class BooBookPrototype extends BookPrototype
{
    protected string $category = 'Boo';

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}