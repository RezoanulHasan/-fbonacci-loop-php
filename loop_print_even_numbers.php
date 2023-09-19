<?php
// Function to print even numbers using for loop
function printEvenNumbersFor($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
    echo "\n";
}

// Function to print even numbers using while loop
function printEvenNumbersWhile($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    }
    echo "\n";
}

// Function to print even numbers using do-while loop
function printEvenNumbersDoWhile($start, $end, $step) {
    $i = $start;
    do {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    } while ($i <= $end);
    echo "\n";
}

// Using for loop
echo "Using for loop: ";
printEvenNumbersFor(2, 20, 2);


// Using while loop
echo "Using while loop: ";
printEvenNumbersWhile(2, 20, 2);

// Using do-while loop
echo "Using do-while loop: ";
printEvenNumbersDoWhile(2, 20, 2);
?>
