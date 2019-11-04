<?php

function get_intersection_data($arr1, $arr2)
{
    $res = [];
    foreach ($arr1 as $item) {
        if (in_array($item, $arr2)) {
            $res[] = $item;
        }
    }
    return $res;
}

function get_even($arr)
{
    $res = [];
    foreach ($arr as $item) {
        if ($item % 2 == 0) {
            $res[] = $item;
        }
    }
    return $res;
}

function get_recursive_array_sum($arr)
{
    //TODO use loop while? and need to know a depth of array
    $sum = 0;
    foreach ($arr as $item) {
        if (is_array($item)) {
            foreach ($item as $item2) {
                if (is_array($item2)) {
                    foreach ($item2 as $item3) {
                        if (is_array($item3)) {
                            foreach ($item3 as $item4) {
                                if (is_array($item4)) {
                                    foreach ($item4 as $item5) {
                                        if (is_array($item5)) {
                                            continue;
                                        } else {
                                            $sum += $item5;
                                        }
                                    }
                                } else {
                                    $sum += $item4;
                                }
                            }
                        } else {
                            $sum += $item3;
                        }
                    }
                } else {
                    $sum += $item2;
                }
            }
        } else {
            $sum += $item;
        }
    }
    return $sum;
}