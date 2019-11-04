<?php

/**
 * Class Bicycle
 */
class Bicycle implements Vehicle
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
    private $passenger = [];

    /**
     * @var int
     */
    private $passenger_count = 0;
    /**
     * @var int
     */
    private $capacity = 0;

    /**
     * Bicycle constructor.
     * @param int $capacity
     */
    public function __construct($capacity = 1)
    {
        $this->capacity = $capacity;
    }
}