<?php
/**
 * Main interface for vehicles
 *
 * @author Alexey Vasilyev <asv2108@gmail.com>
 * @since  1.1
 */
namespace App;

/**
 * Interface Vehicle
 */
interface VehicleInterface
{
    public function addDriver();
    public function addPassenger() ;

    public function speedUp();
    public function speedDown();

    public function forward();
    public function backward();
    public function turnLeft();
    public function turnRight();
}
