<?php

namespace Structural\Adapter;

class TurboEngine implements TurboInterface
{

    /**
     * @return string
     */
    public function startTurbo() : string
    {
        return "Turbo Engine Started";
    }
}