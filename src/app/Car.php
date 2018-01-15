<?php

namespace App;

/**
 * Class that stores simple car order information
 *
 * @author Rob Waller <rdwaller1984@googlemail.com>
 */
class Car
{
    /**
     * Car color
     *
     * @var string
     */
    private $colour;

    /**
     * Car wheel count
     *
     * @var int
     */
    private $wheels;

    /**
     * Car door count
     *
     * @var int
     */
    private $doors;

    public function __construct(string $colour, int $wheels, int $doors)
    {
        $this->colour = $colour;

        $this->wheels = $wheels;

        $this->doors = $doors;
    }

    /**
     * Return the car color
     */
    public function getColour(): string
    {
        return $this->colour;
    }

    /**
     * Return the car wheel count
     */
    public function getWheelCount(): int
    {
        return $this->wheels;
    }

    /**
     * Return the car door count
     */
    public function getDoorCount(): int
    {
        return $this->doors;
    }
}
