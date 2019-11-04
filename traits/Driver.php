<?php

/**
 * Trait Driver
 *
 * the logic for add a driver for a vehicle
 *
 */
trait Driver
{

    /**
     * add a driver to a vehicle
     */
    public function add_driver()
    {
        if ($this->driver === null) {
            echo nl2br('the driver added') . '<br/>'; // TODO nl2br and PHP_EOL does not work????
            $this->driver = new Human();
            $this->driver->set_name('driver');
            $this->driver->set_role('driver');
        } else {
            echo nl2br('the car already has a driver') . '<br/>';
        }

    }


    public function get_driver_name()
    {
        if ($this->driver !== null) {
            echo 'driver name is - ' . $this->driver->get_name();
        } else {
            echo 'driver\'s seat is free' . '<br/>';
        }
    }
}
