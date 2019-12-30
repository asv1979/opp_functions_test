<?php
/**
 * Class for create some vehicles
 *
 * @author Alexey Vasilyev <asv2108@gmail.com>
 * @since  1.1
 */

namespace App;

/**
 * Class VehicleFactory
 *
 * @package App
 */
class VehicleFactory
{
    /**
     * A list of possible vehicles
     */
    const TYPES = ['Car', 'Truck', 'Motorcycle', 'Bicycle'];
    const ERROR_MESSAGE = 'Sorry, we cannot build such type of vehicle';

    /**
     * @param string $type
     * @return Bicycle|Car|Motorcycle|Truck|string
     */
    public function createVehicle($type)
    {
        $type = ucfirst($type);
        if (in_array($type, self::TYPES)) {
            try {
                switch ($type) {
                    case 'Car':
                        return new Car();
                        break;
                    case 'Truck':
                        return new Truck();
                        break;
                    case 'Motorcycle':
                        return new Motorcycle();
                        break;
                    case 'Bicycle':
                        return new Bicycle();
                        break;
                }
            } catch (\Exception $e) {
                return 'Get error: ' . $e->getMessage() . "\n";
            }
        } else {
            return '<h2 class="error-message">' . self::ERROR_MESSAGE . '</h2>';
        }
    }
}
