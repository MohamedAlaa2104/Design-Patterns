<?php

namespace Structural\Adapter;

class TurboEnigneAdapter implements EngineInterface
{
    private TurboInterface $engine;

    public function __construct(TurboInterface $engine)
    {
        $this->engine = $engine;
    }

    public function startEngine()
    {
        return $this->engine->startTurbo();
    }
}