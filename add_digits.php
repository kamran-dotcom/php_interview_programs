<?php
echo "<h5>Add Digits of given number</h5>";

$num = 1234;

$num = (string)$num;

$len = strlen($num);
$sum = 0;
for($i = 0; $i <= $len-1; $i++)
{
    $sum += $num[$i];
}

echo $sum;
?>