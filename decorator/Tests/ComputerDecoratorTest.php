<?php

namespace Test;

use PHPUnit\Framework\TestCase;

use App\Laptop;
use App\GPUDecorator;
use App\OLEDScreenDecorator;

class ComputerDecoratorTest extends TestCase
{
    public function testBasicLaptop()
    {
        $laptop = new Laptop();

        $this->assertSame(400, $laptop->getPrice());
        $this->assertSame("A laptop computer", $laptop->getDescription());
    }

    public function testLaptopWithGPU()
    {
        $laptop = new Laptop();
        $laptopWithGPU = new GPUDecorator($laptop, 200);

        $this->assertSame(600, $laptopWithGPU->getPrice());
        $this->assertSame("A laptop computer with GPU", $laptopWithGPU->getDescription());
    }

    public function testLaptopWithOLEDScreen()
    {
        $laptop = new Laptop();
        $laptopWithOLEDScreen = new OLEDScreenDecorator($laptop, 150);

        $this->assertSame(550, $laptopWithOLEDScreen->getPrice());
        $this->assertSame("A laptop computer with OLED Screen", $laptopWithOLEDScreen->getDescription());
    }

    public function testLaptopWithOLEDScreenAndGPU()
    {
        $laptop = new Laptop();
        $laptopWithOLEDScreen = new OLEDScreenDecorator($laptop, 150);
        $laptopWithOLEDScreenAndGPU = new GPUDecorator($laptopWithOLEDScreen, 200);

        $this->assertSame(750, $laptopWithOLEDScreenAndGPU->getPrice());
        $this->assertSame("A laptop computer with OLED Screen with GPU", $laptopWithOLEDScreenAndGPU->getDescription());
    }
}
