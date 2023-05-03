<?php
echo "<h5>Reverse by using loop</h5>";
$name = "kamran";

$len = strlen($name);

for($i = $len-1; $i >=0; $i--)
{
    echo $name[$i];
}

echo "<h5>Reverse by using buit-in-function</h5>";

$name = "kamran";
$reverse = strrev($name);

echo $reverse;
?>