<?php

function fibonacci($n)
{
    if ($n < 0) {
        throw new Exception("n must be a non-negative integer");
    } elseif ($n == 0 || $n == 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

// Calculate the first 10 Fibonacci numbers
$fibonacciNumbers = [];
for ($i = 0; $i < 10; $i++) {
    $fibonacciNumber = fibonacci($i);

    // If the Fibonacci number is greater than 100, break out of the loop
    if ($fibonacciNumber > 100) {
        break;
    }

    $fibonacciNumbers[] = $fibonacciNumber;
}

// Print the Fibonacci numbers
foreach ($fibonacciNumbers as $fibonacciNumber) {
    echo $fibonacciNumber . PHP_EOL;
}

?>