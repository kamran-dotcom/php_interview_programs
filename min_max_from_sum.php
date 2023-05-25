<?php

/*
 * Given five positive integers, find the minimum and maximum values that can be calculated by summing exactly four of the five integers. Then print the respective minimum and maximum values as a single line of two space-separated long integers.
 * Example
 * The minimum sum is  and the maximum sum is . The function prints
 * 16 24
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {
    // Write your code here
    $len = count($arr);
    $min = 0;
    $max = 0;
    $newArr = [];
    for($i = 0; $i < $len; $i++)
    {
        $value = $arr[$i];
        array_splice($arr, $i, 1);

        // print_r($arr);
        $sum = 0;
        for($j = 0; $j < count($arr); $j++)
        {
            $sum += $arr[$j];
        }

        array_push($newArr,$sum);

        array_splice( $arr, $i, 0, $value );
    }

    for($i = 0; $i < count($newArr); $i++)
    {
        if($newArr[$i] > $max)
        {
            $max = $newArr[$i];
        }

        $min = $newArr[0];
        if($newArr[$i] < $min)
        {
            $min = $newArr[$i];
        }
    }

    // print_r($arr);
    echo $min," ",$max;

}

// $arr_temp = rtrim(fgets(STDIN));

// $arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
$arr = [1,2,3,4,5];
miniMaxSum($arr);
