<?php
require_once "vendor/function.php";
require_once "interfaces/Vehicle.php";
require_once "traits/Moving.php";
require_once "traits/Driver.php";
require_once "traits/Speed.php";
require_once "traits/Passenger.php";
require_once "classes/Human.php";
require_once "classes/VehicleFactory.php";


$factory = new VehicleFactory();
$car = $factory->create_vehicle('car');
if ($car instanceof Vehicle){
    echo '<h2>New car was created</h2>';
    $car->add_driver();
    $car->add_driver();
    $car->add_passenger();
    $car->add_passenger();
    $car->add_passenger();
    $car->add_passenger();
    $car->add_passenger();
    $car->speed_up();
    $car->forward();
    $car->left_turn();
    $car->right_turn();
    $car->backward();
    $car->speed_down();

    $car->get_driver_name();
}
$arr1 = [1, 3, 5, 7, 12, 24];
$arr2 = [2, 1, 4, 8, 7, 10, 24, 30];
$arr3 = [4, 2, 5];
$arr = [
    3,
    $arr1,
    [
        2,
        [
            $arr2, $arr3
        ]
    ]
];

echo '-----------------------<br/>';
echo 'get_recursive_array_sum <br>';
print_r(get_recursive_array_sum($arr));
echo ' <br>';
echo 'get_even <br>';
print_r(get_even($arr2));
echo ' <br>';
echo 'get_intersection_data <br>';
print_r(get_intersection_data($arr1,$arr2));