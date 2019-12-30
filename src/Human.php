<?php
/**
 * @author Alexey Vasilyev
 * @since 1.1
 */

namespace App;

/**
 * Class Human
 *
 * @package App
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
     *
     * @param int $weight
     * @param int $height
     */
    public function __construct($weight = 60, $height = 170)
    {
        $this->weight = $weight;
        $this->height = $height;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }
}
