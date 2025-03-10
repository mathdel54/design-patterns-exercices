<?php

namespace App;

class OLEDScreen implements Computer
{
    protected $computer;

    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    public function getPrice(): int
    {
        return $this->computer->getPrice() + 500;
    }

    public function getDescription(): string
    {
        return $this->computer->getDescription() . ', OledScreen';
    }
}