<?php

/*
 * Complete the 'timeConversion' function below.
 * Given a time in -hour AM/PM format, convert it to military (24-hour) time.

    Note: - 12:00:00AM on a 12-hour clock is 00:00:00 on a 24-hour clock.
    - 12:00:00PM on a 12-hour clock is 12:00:00 on a 24-hour clock.
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function timeConversion($s) {
    // Write your code here
    $time = date("H:i:s", strtotime($s));

    return $time;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$s = rtrim(fgets(STDIN), "\r\n");
$s = '5:03:12 PM';

$result = timeConversion($s);
// echo $result;
fwrite($fptr, $result . "\n");

fclose($fptr);
