<?php

$num = 4;

for($i = 0; $i < $num; $i++)
{
    echo fabonacci($i). " ";
}

function fabonacci($num)
{
    if($num == 0 || $num == 1)
    {
        return $num;
    }
    else
    {
        return fabonacci($num-1) + fabonacci($num-2);
    }
}
?>