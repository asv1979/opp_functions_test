<?php

/**
 * Class Human
 *
 * will use as a driver or a passenger in a vehicle
 */
class Human
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var int
     */
    private $weight;
    /**
     * @var int
     */
    private $height;
    /**
     * @var string
     */
    private $role;

    /**
     * Human constructor.
     * @param int $weight
     * @param int $height
     * @param string $role
     */
    public function __construct($weight = 60, $height = 170)
    {
        $this->weight = $weight;
        $this->height = $height;
    }

    /**
     * @param $name
     */
    public function set_name($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function get_name()
    {
        return $this->name;
    }

    /**
     * @param $role
     */
    public function set_role($role)
    {
        $this->role = $role;
    }

    /**
     * @return string
     */
    public function get_role()
    {
        return $this->role;
    }
}
