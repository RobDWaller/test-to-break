<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Car;

class CarTest extends TestCase
{
    /**
     * Test creation of Car object and getter methods
     */
    public function testMakeCar()
    {
        $car = new Car('black', 4, 5);

        $this->assertEquals('black', $car->getColour());
        $this->assertEquals(4, $car->getWheelCount());
        $this->assertEquals(5, $car->getDoorCount());
    }
}
