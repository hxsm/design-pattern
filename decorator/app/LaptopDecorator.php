<?php

namespace App;

abstract class LaptopDecorator implements Computer
{
    protected Computer $laptop;

    public function __construct(Computer $laptop)
    {
        $this->laptop = $laptop;
    }

    public function getPrice(): int
    {
        return $this->laptop->getPrice();
    }

    public function getDescription(): string
    {
        return $this->laptop->getDescription();
    }
}
