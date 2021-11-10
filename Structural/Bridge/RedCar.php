<?php

namespace Structural\Bridge;

class RedCar implements CarColor
{

    public function getColor() : string
    {
        return "red";
    }
}