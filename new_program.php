<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {
    // Write your code here
    $len = count($arr);
    $min = 0;
    $max = 0;
    for($i = 0; $i < $len; $i++)
    {
        array_splice($arr, $i, 1);
        $sum = 0;
        for($j = 0; $j < count($arr); $j++)
        {

        }
    }

}

// $arr_temp = rtrim(fgets(STDIN));

// $arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
$arr = [1,3,5,7,9];
miniMaxSum($arr);
