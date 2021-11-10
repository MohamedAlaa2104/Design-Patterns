<?php

namespace Creational\Builder\Modules;

class Car
{

    private $data = [];

    public function setPart($name , $value) {
        $this->data[$name] = $value;
    }
}