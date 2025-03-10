<?php

namespace App;

class GPU implements Computer
{
    protected $computer;

    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    public function getPrice(): int
    {
        return $this->computer->getPrice() + 165;
    }

    public function getDescription(): string
    {
        return $this->computer->getDescription() . ', GPU';
    }
}