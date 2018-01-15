<?php

namespace App;

use App\Car;
use App\OrderException;

/**
 * Class that validates a Car object and returns an order statement
 *
 * @author Rob Waller <rdwaller1984@googlemail.com>
 */
class Order
{
    /**
     * Car object
     *
     * @var App\Car
     */
    private $car;

    public function __construct(Car $car)
    {
        $this->car = $car;
    }

    /**
     * Validate the car object and return the order statement string
     */
    public function getOrderDetails(): string
    {
        $this->validate();

        return 'You have ordered a ' . $this->car->getColour() . ' car with ' . $this->car->getWheelCount() . ' wheels and ' . $this->car->getDoorCount() . ' doors';
    }

    /**
     * Validate that the car object complies with the application rules
     *
     * @throws App\OrderException
     */
    private function validate(): void
    {
        if ($this->car->getColour() !== 'black') {
            throw new OrderException('You must order a black car');
        }

        if ($this->car->getWheelCount() !== 4) {
            throw new OrderException('You must order a car with 4 wheels');
        }

        if ($this->car->getDoorCount() !== 5 && $this->car->getDoorCount() !== 3) {
            throw new OrderException('You must order a car with 5 or 3 doors');
        }
    }
}
