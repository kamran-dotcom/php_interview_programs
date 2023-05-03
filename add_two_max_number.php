<?php
echo "<h3>Add two maximum numbers from array</h3>";

echo "<h4>By using built-in function</h4>";

$arr = [12,3,5,23,1];

sort($arr);
$count = sizeof($arr);
$sum = $arr[$count-1] + $arr[$count-2];

echo "<h5>Sum of two greates numbers: $sum</h5>";

/*------------------------------------------------------------------------------------------------------------------------------------------- */
/*-------------------------------------------------------  Program By using loop  ------------------------------------------------------------ */
/*------------------------------------------------------------------------------------------------------------------------------------------- */
echo "<h4>By using loops</h4>";
$arr = [12,3,5,23,1];
// print_r($arr);
$n = sizeof($arr);
for($i = 0; $i < $n; $i++)
{
    for($j = 0; $j < $n - $i - 1; $j++)
    {
        if($arr[$j] > $arr[$j+1])
        {
            $temp = $arr[$j];

            $arr[$j] = $arr[$j+1];

            $arr[$j+1] = $temp;
        }
    }
}

// print_r($arr);
$sum = $arr[$n-1] + $arr[$n-2];

echo "<h5>Sum of two greates numbers: $sum</h5>";
?>