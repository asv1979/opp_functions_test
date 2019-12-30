<?php
/**
 * Block of custom functions for the test task
 *
 * @author Alexey Vasilyev <asv2108@gmail.com>
 * @since  1.1
 */

/**
 * Get intersection data
 *
 * @param array $arr1
 * @param array $arr2
 *
 * @return array
 */
function getIntersectionData($arr1, $arr2)
{
    $res = [];
    foreach ($arr1 as $item) {
        if (in_array($item, $arr2)) {
            $res[] = $item;
        }
    }
    return $res;
}

/**
 * Get even array cells
 *
 * @param array $arr
 *
 * @return array
 */
function getEven($arr)
{
    $res = [];
    foreach ($arr as $item) {
        if ($item % 2 == 0) {
            $res[] = $item;
        }
    }

    return $res;
}

/**
 * Get total value from a nested array
 *
 * @param array $array
 *
 * @return int|mixed
 */
function getRecursiveArraySum($array){
    $sum = NULL;
    if(is_array($array)){
        foreach($array as $value){
            if(is_array($value)){
                $sum += getRecursiveArraySum($value);
            }
            if(is_numeric($value)){
                $sum += $value;
            }
        }
    }else{
        if(is_numeric($array)){
            $sum += $array;
        }
    }
    return $sum;
}
