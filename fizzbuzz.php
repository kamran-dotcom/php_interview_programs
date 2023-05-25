<?php



/*
 * 
 *
 * Complete the 'fizzBuzz' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function fizzBuzz($n) {
    // Write your code here
    for($i = 1; $i <= $n; $i++)
    {
        if($i%5 === 0 && $i%3=== 0)
        {
            echo "FizzBuzz\n";
        }
        else if($i%5 !== 0 && $i%3 === 0)
        {
            echo "Fizz\n";   
        }
        else if($i%5 === 0 && $i%3!== 0)
        {
            echo "Buzz\n";
        }
        else
        {
            echo $i,"\n";
        }
    }
    

}

$n = intval(trim(fgets(STDIN)));

fizzBuzz($n);
