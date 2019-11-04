<?php

/**
 * Trait Speed
 *
 * the logic for change a vehicle's speed
 *
 * TODO use real quantity
 *
 */
trait Speed
{
    /**
     * a vehicle's speed to up
     */
    public function speed_up(){
        echo nl2br('speed up') . '<br/>';
    }

    /**
     * a vehicle's speed to down
     */
    public function speed_down(){
        echo nl2br('speed down') . '<br/>';
    }
}
