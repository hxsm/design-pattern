<?php

namespace App;

class OLEDScreenDecorator extends LaptopDecorator
{
    private int $oledScreenPrice;

    public function __construct(Computer $laptop, int $oledScreenPrice)
    {
        parent::__construct($laptop);
        $this->oledScreenPrice = $oledScreenPrice;
    }

    public function getPrice(): int
    {
        return parent::getPrice() + $this->oledScreenPrice;
    }

    public function getDescription(): string
    {
        return parent::getDescription() . " with OLED Screen";
    }
}
