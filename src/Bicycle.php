<?php
/**
 * Some class for the test task
 *
 * @author Alexey Vasilyev <asv2108@gmail.com>
 * @since  1.1
 */

namespace App;

/**
 * Class Bicycle
 */
class Bicycle extends Vehicle
{
    const CAPACITY = 1;

    /**
     * Bicycle constructor.
     */
    public function __construct()
    {
        parent::__construct($capacity = self::CAPACITY);
    }
}
