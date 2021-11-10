<?php

namespace Structural\Adapter;

class NormalEngine implements EngineInterface
{

    /**
     * @return string
     */
    public function startEngine() : string
    {
        return "Normal Engine Started";
    }
}