<?php
/**
 * Some class for the test task
 *
 * @author Alexey Vasilyev <asv2108@gmail.com>
 * @since  1.1
 */

namespace App;

/**
 * Class Car
 *
 * @package App
 */
class Car extends Vehicle
{
    const CAPACITY = 4;

    /**
     * Car constructor.
     */
    public function __construct()
    {
        parent::__construct($capacity = self::CAPACITY);
    }
}
