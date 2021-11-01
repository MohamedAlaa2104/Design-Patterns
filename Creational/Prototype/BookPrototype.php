<?php

namespace Creational\Prototype;

abstract class BookPrototype
{
    /**
     * @var string
     */
    protected string $category;

    /**
     * @var string
     */
    protected string $title;

    abstract public function __clone();

    public function setTitle(string $title) : void
    {
        $this->title = $title;
    }

    public function getTitle() : string
    {
        return $this->title;
    }


}