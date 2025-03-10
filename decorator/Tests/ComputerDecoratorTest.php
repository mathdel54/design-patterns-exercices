<?php

namespace Test;

use PHPUnit\Framework\TestCase;

use App\Laptop;
use App\GPU;
use App\OLEDScreen;

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
        $laptop = new GPU($laptop);

        $this->assertSame(565, $laptop->getPrice());
        $this->assertSame('A laptop computer, GPU', $laptop->getDescription());
    }

    public function testLaptopWithOLEDScreen()
    {
        $laptop = new Laptop();
        $laptop = new OLEDScreen($laptop);
        $this->assertSame(900, $laptop->getPrice());
        $this->assertSame('A laptop computer, OledScreen', $laptop->getDescription());
    }
}