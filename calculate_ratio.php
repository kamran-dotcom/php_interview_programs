<?php

/*
* Given an array of integers, calculate the ratios of its elements that are positive, negative, and zero. Print the decimal value of each fraction on a new line with  places after the decimal.

* Note: This challenge introduces precision problems. The test cases are scaled to six decimal places, though answers with absolute error of up to  are acceptable.

* Example

* There are  elements, two positive, two negative and one zero. Their ratios are ,  and . Results are printed as:

* 0.400000
* 0.400000
* 0.200000




 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 * 
 */

function plusMinus($arr) {
    // Write your code here
    $len = count($arr);
    $positive = 0;
    $zero = 0;
    $negative = 0;
    for($i=0; $i<$len; $i++)
    {
        if($arr[$i] > 0 )
        {
            $positive ++;
        }
        else if($arr[$i]<0)
        {
            $negative ++;
        }
        else
        {
            $zero ++;
        }
    }
    
    $positivOutput = $positive/$len;
    $negativeOutput = $negative/$len;
    $zeroOutput = $zero/$len;
    // number_format($number, 6)
    echo number_format($positivOutput, 6), "<br/>",number_format($negativeOutput, 6),"<br/>",number_format($zeroOutput, 6);
}

// $n = intval(trim(fgets(STDIN)));

// $arr_temp = rtrim(fgets(STDIN));

// $arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
$arr = [-4, 3, -9, 0, 4, 1];
plusMinus($arr);
