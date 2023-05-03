<?php
echo "<h4>Swap two numbers with 3rd variable</h4>";

$num1 = 10;
$num2 = 20;

echo "<h5>numbers before swap first number $num1 and second number $num2</h5>";
$num3 = $num1;
$num1 = $num2;
$num2 = $num3;

echo "<h5>numbers after swap first number $num1 and second number $num2</h5>";

echo "<h4>Swap two numbers without using 3rd varibale</h4>";

$num1 = 10;
$num2 = 20;

$num1 = $num1 + $num2; //30

$num2 = $num1 - $num2; //30 -20 = 10

$num1 = $num1 - $num2; //30 - 10 = 20

echo "<h5>After swap without using 3rd variable, first number $num1 and second number $num2</h5>";
?>