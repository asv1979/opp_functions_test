<?php
/**
 * Some class for the test task
 *
 * @author Alexey Vasilyev <asv2108@gmail.com>
 * @since  1.1
 */

namespace App;

/**
 * Class Truck
 */
class Truck extends Vehicle
{
    const CAPACITY = 2;

    /**
     * Truck constructor.
     */
    public function __construct()
    {
        parent::__construct($capacity = self::CAPACITY);
    }
}
