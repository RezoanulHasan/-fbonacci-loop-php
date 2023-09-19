<?php
function fibonacci($n) {
    $fib = array(0, 1);
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i-1] + $fib[$i-2];
    }
    return $fib;
}

function printFibonacci($n) {
    $fibonacciSeries = fibonacci($n);
    for ($i = 0; $i < 15; $i++) { // Update the loop condition to iterate only 15 times
        echo $fibonacciSeries[$i] . " ";
    }
}

// Call the function to print the first 15 numbers in the Fibonacci series
printFibonacci(15);
?>