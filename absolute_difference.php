<?php

$arr = [10,3,5,2,3,13];

$size = sizeof($arr);

$num = 10;

for($i = 0; $i < $size; $i++)
{
    $diff = $num - $arr[$i];

    if($diff < 0)
    {
        $diff = -($diff);
    }

    echo "<h5>difference b/w ",$num," and ",$arr[$i]," is ",$diff,"</h5>";
}
?>