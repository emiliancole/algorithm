<?php

/**
 * Calculates the factorial of a natural number.
 * 
 * @param int $n A natural number
 * 
 * @return int The factorial of $n
 */
function factorial($n)
{
    $result = 1;  // creates a variable of type integer
    
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    
    return $result;
}

echo factorial(12);