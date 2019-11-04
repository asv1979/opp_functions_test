<?php

/**
 * Trait Moving
 *
 * the logic for change location of a vehicle
 *
 * TODO use x,y coordinates
 */
trait Moving
{
    /**
     * move a vehicle to forward
     */
    public function forward(){
        echo 'Go forward <br/>';
    }


    /**
     * return a vehicle to back
     */
    public function backward(){
        echo 'Go back <br/>';
    }

    /**
     * turn a vehicle to left
     */
    public function left_turn(){
        echo 'Turn left <br/>';
    }

    /**
     * turn a vehicle to right
     */
    public function right_turn(){
        echo 'Turn right <br/>';
    }
}