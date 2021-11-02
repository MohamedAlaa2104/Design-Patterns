<?php

namespace Creational\StaticFactory;

class StaticFactory
{
    /**
     * @param $type
     * @return BMWCar|KIACar|false
     */
    public static function factory($type)
    {
        if ($type == 'bmw') {
            return new BMWCar();
        }
        if ($type == 'kia') {
            return new KIACar();
        }
        return false;
    }
}