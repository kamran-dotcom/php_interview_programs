<?php
echo "<h5>Reverse number using loop</h5>";
$num = 1234567;

echo "<h5>Number before Reverse $num</h5>";
$revNum = 0;
while($num > 1)
{
    $rem = $num % 10;
    $revNum = ($revNum * 10) + $rem;
    $num = $num / 10;
}

echo "<h5>reverse number $revNum</h5>";

echo"<h5>Reverse Number using string built-in function</h5>";

$num = 1234567;

$numToStr = (string)$num;

$revNum = strrev($numToStr);

$strToNum = (int)$revNum;

echo "<h5>Reversed Number $strToNum</h5>";
?>