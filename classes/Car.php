<?php

/**
 * Class Car
 */
class Car implements Vehicle
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
    private $capacity = 2;

    /**
     * Car constructor.
     * @param int $capacity
     */
    public function __construct($capacity = 3)
    {
        $this->capacity = $capacity;
    }
}
