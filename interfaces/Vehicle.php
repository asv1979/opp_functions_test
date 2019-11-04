<?php
/**
 * Interface Vehicle
 */
interface Vehicle
{
    //TODO add description
    public function add_driver();
    public function add_passenger();

    public function speed_up();
    public function speed_down();

    public function forward();
    public function backward();
    public function left_turn();
    public function right_turn();

}
