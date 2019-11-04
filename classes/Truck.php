<?php

/**
 * Class Truck
 */
class Truck implements Vehicle
{
    use Moving, Driver, Speed, Passenger;

    /**
     * @var null
     *
     * here will be a driver
     *
     */
    private $driver = null;


    /**
     * @var array
     *
     * here will be a passenger
     *
     */
    private $passenger_count = [];

    /**
     * @var int
     */
    private $passenger = 0;
    /**
     * @var int
     */
    private $capacity = 1;

    /**
     * Truck constructor.
     * @param int $capacity
     */
    public function __construct($capacity = 1)
    {
        $this->capacity = $capacity;
    }
}
