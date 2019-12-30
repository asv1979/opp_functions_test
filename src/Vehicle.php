<?php
/**
 * @author Alexey Vasilyev
 * @since 1.1
 */

namespace App;

/**
 * Class Vehicle
 * @package App
 */
class Vehicle implements VehicleInterface
{
    const VEHICLE_FULL = 'The vehicle is already full';
    const VEHICLE_DRIVER = 'This vehicle already has a driver';
    const PASSENGER_ADDED = 'a passenger added';
    const DRIVER_ADDED = 'the driver added';
    const SPEED_UP = 'speed up';
    const SPEED_DOWN = 'speed down';
    const EMPTY_DRIVER = 'driver\'s seat is free';
    const MOVIE_FORWARD = 'Go forward';
    const MOVIE_BACK = 'Go back';
    const MOVIE_LEFT = 'Turn left';
    const MOVIE_RIGHT = 'Turn right';

    /**
     * @var bool|Human
     */
    private $driver = false;

    /**
     * @var array
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
     * Vehicle constructor.
     *
     * @param $capacity
     */
    public function __construct($capacity)
    {
        $this->capacity = $capacity;
    }

    /**
     * @return string
     */
    public function addPassenger()
    {
        if ($this->passenger_count >= $this->capacity) {
            return self::VEHICLE_FULL;
        } else {
            $this->passenger_count += 1;
            $new_passenger = new Human();
            $new_passenger->setName('passenger ' . $this->passenger_count);
            $new_passenger->setRole('passenger');
            $this->passenger[$this->passenger_count] = $new_passenger;

            return self::PASSENGER_ADDED;
        }
    }

    /**
     * @return string
     */
    public function addDriver()
    {
        if (!$this->driver) {
            $this->driver = new Human();
            $this->driver->setName('driver');
            $this->driver->setRole('driver');

            return self::DRIVER_ADDED;
        } else {
            return self::VEHICLE_DRIVER;
        }

    }

    /**
     * @return string
     */
    public function getDriverName()
    {
        if ($this->driver instanceof Human) {
            return $this->driver->getName();
        } else {
            return self::EMPTY_DRIVER;
        }
    }

    /**
     * Increase a vehicle speed
     *
     * @return string
     */
    public function speedUp()
    {
        return self::SPEED_UP;
    }


    /**
     * Decrease a vehicle's speed
     *
     * @return string
     */
    public function speedDown()
    {
        return self::SPEED_DOWN;
    }

    /**
     * Move a vehicle to forward
     *
     * @return string
     */
    public function forward()
    {
        return self::MOVIE_FORWARD;
    }

    /**
     * Return a vehicle to back
     *
     * @return string
     */
    public function backward()
    {
        return self::MOVIE_BACK;
    }

    /**
     * Turn a vehicle to left
     *
     * @return string
     */
    public function turnLeft()
    {
        return self::MOVIE_LEFT;
    }

    /**
     * Turn a vehicle to right
     *
     * @return string
     */
    public function turnRight()
    {
        return self::MOVIE_RIGHT;
    }
}
