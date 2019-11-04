<?php

/**
 * Trait Passenger
 */
trait Passenger
{
    /**
     * add a passenger in the car
     */
    public function add_passenger()
    {
        //TODO add a real entity
        if ($this->passenger_count >= $this->capacity) {
            echo nl2br('The vehicle is already full') . '<br/>';
        } else {
            $this->passenger_count += 1;
            $new_passenger = new Human;
            $new_passenger->set_name('passenger '.$this->passenger_count);
            $new_passenger->set_role('passenger');
            $this->passenger[$this->passenger_count] = $new_passenger;
            echo nl2br('a passenger added') . '<br/>';
        }
    }
}
