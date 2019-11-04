<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Motorcycle.php';
require_once 'Truck.php';

/**
 * Class VehicleFactory
 */
class VehicleFactory
{
    /**
     * a list of possible vehicles
     */
    const TYPES = ['Car','Truck','Motorcycle','Bicycle'];

    /**
     * @param $type
     * @return Bicycle|Car|Motorcycle|Truck
     */
    public function create_vehicle($type)
    {
        $type =  ucfirst($type);
        if (in_array($type, self::TYPES)){
            try {
                switch ($type){
                    case 'Car':
                        return new Car;
                        break;
                    case 'Truck':
                        return new Truck;
                        break;
                    case 'Motorcycle':
                        return new Motorcycle;
                        break;
                    case 'Bicycle':
                        return new Bicycle;
                        break;
                }
            } catch (Exception $e) {
                echo 'Get error: ',  $e->getMessage(), "\n";
            }
        }else{
            echo '<h2 class="error-message"> sorry, we cannot build such type of vehicle </h2>';
        }
    }
}