<?php
use App\Vehicle;
use App\VehicleFactory;

try {
    require_once __DIR__ . "/src/Functions/function.php";
    require_once __DIR__ . '/vendor/autoload.php';
} catch (\Exception $e) {
    echo <<<HTML
<div style="font:12px/1.35em arial, helvetica, sans-serif;">
    <div style="margin:0 0 25px 0; border-bottom:1px solid #ccc;">
        <h3 style="margin:0;font-size:1.7em;font-weight:normal;text-transform:none;text-align:left;color:#2f2f2f;">
        Autoload error</h3>
    </div>
    <p>{$e->getMessage()}</p>
</div>
HTML;
    exit(1);
}

$factory = new VehicleFactory();
$car = $factory->createVehicle('car');
if ($car instanceof Vehicle) {
    echo '<h2>New car was created</h2>';
    echo 'Add new driver', '<br>';
    echo $car->addDriver(), '<br>';
    echo 'Add new driver', '<br>';
    echo $car->addDriver(), '<br>';
    echo $car->addPassenger(), '<br>';
    echo $car->addPassenger(), '<br>';
    echo $car->addPassenger(), '<br>';
    echo $car->addPassenger(), '<br>';
    echo $car->addPassenger(), '<br>';
    echo $car->speedUp(), '<br>';
    echo $car->forward(), '<br>';
    echo $car->turnLeft(), '<br>';
    echo $car->turnRight(), '<br>';
    echo $car->backward(), '<br>';
    echo $car->speedDown(), '<br>';
    echo $car->getDriverName(), '<br>';
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
print_r(getRecursiveArraySum($arr));
echo '<br> From ';
print_r($arr);
echo ' <br>';
echo 'get_even <br>';
print_r(getEven($arr2));
echo '<br> From ';
print_r($arr2);
echo ' <br>';
echo 'get_intersection_data <br>';
print_r(getIntersectionData($arr1, $arr2));
echo '<br> From ';
print_r($arr1);
echo '<br> and';
print_r($arr2);