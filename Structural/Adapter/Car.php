<?php

namespace Structural\Adapter;

class Car
{
    /**
     * @var EngineInterface
     */
    private EngineInterface $engine;

    /**
     * @param EngineInterface $engine
     */
    public function __construct(EngineInterface $engine)
    {
        $this->engine = $engine;
    }

    public function start() : string
    {
        return $this->engine->startEngine();
    }
}