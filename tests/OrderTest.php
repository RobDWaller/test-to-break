<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Car;
use App\Order;
use App\OrderException;

class OrderTest extends TestCase
{
    /**
     * Test order of five door car
     */
    public function testOrderFiveDoorCar()
    {
        $car = new Car('black', 4, 5);

        $order = new Order($car);

        $this->assertEquals(
            'You have ordered a black car with 4 wheels and 5 doors',
            $order->getOrderDetails()
        );
    }

    /**
     * Test order of three door car
     */
    public function testOrderThreeDoorCar()
    {
        $car = new Car('black', 4, 3);

        $order = new Order($car);

        $this->assertEquals(
            'You have ordered a black car with 4 wheels and 3 doors',
            $order->getOrderDetails()
        );
    }

    /**
     * Test ordering a blue car fails
     *
     * @expectedException App\OrderException
     * @expectedExceptionMessage You must order a black car
     */
    public function testOrderBlueCar()
    {
        $car = new Car('blue', 4, 3);

        $order = new Order($car);

        $order->getOrderDetails();
    }

    /**
     * Test ordering a car with eight wheels fail
     *
     * @expectedException App\OrderException
     * @expectedExceptionMessage You must order a car with 4 wheels
     */
    public function testOrderEightWheelCar()
    {
        $car = new Car('black', 8, 3);

        $order = new Order($car);

        $order->getOrderDetails();
    }

    /**
     * Test ordering six door car fails
     *
     * @expectedException App\OrderException
     * @expectedExceptionMessage You must order a car with 5 or 3 doors
     */
    public function testOrderSixDoorCar()
    {
        $car = new Car('black', 4, 6);

        $order = new Order($car);

        $order->getOrderDetails();
    }
}
