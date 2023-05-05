<?php
echo "<h4>Write a PHP program to remove the character in a given position of a given string.</h4>";

$string = "kamran";
$position = 3;

$len = strlen($string);

$updatedStr = substr_replace($string, '', $position, 1);

echo "<h5>Before Removing String: ",$string,"</h5>";
echo "<h5>After Removing String: ",$updatedStr,"</h5>";
?>