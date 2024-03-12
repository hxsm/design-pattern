<?php

namespace App;

class GPUDecorator extends LaptopDecorator
{
    private int $gpuPrice;

    public function __construct(Computer $laptop, int $gpuPrice)
    {
        parent::__construct($laptop);
        $this->gpuPrice = $gpuPrice;
    }

    public function getPrice(): int
    {
        return parent::getPrice() + $this->gpuPrice;
    }

    public function getDescription(): string
    {
        return parent::getDescription() . " with GPU";
    }
}
