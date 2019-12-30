<?php
/**
 * Some class for the test task
 *
 * @author Alexey Vasilyev <asv2108@gmail.com>
 * @since  1.1
 */

namespace App;

/**
 * Class Motorcycle
 *
 * @package App
 */
class Motorcycle extends Vehicle
{
    const CAPACITY = 1;

    /**
     * Motorcycle constructor.
     */
    public function __construct()
    {
        parent::__construct(self::CAPACITY);
    }
}
