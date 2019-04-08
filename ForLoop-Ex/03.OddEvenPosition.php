<?php

$n = floatval(readline());
$oddSum = 0.00;
$oddMin = 1000000000.0;
$oddMax = -1000000000.0;
$evenSum = 0.00;
$evenMin = 1000000000.0;
$evenMax = -1000000000.0;

if ($n < 0) {
    echo "Error" . PHP_EOL;
    
} else if ($n == 0) {
    echo "OddSum = $n" . PHP_EOL;
    echo "OddMin = No" . PHP_EOL;
    echo "OddMax = No" . PHP_EOL;
    echo "EvenSum = $n" . PHP_EOL;
    echo "EvenMin = No" . PHP_EOL;
    echo "EvenMax = No" . PHP_EOL;
    
} else if ($n == 1) {
    $num = floatval(readline());
    echo "OddSum = $num" . PHP_EOL;
    echo "OddMin = $num" . PHP_EOL;
    echo "OddMax = $num" . PHP_EOL;
    echo "EvenSum = 0" . PHP_EOL;
    echo "EvenMin = No" . PHP_EOL;
    echo "EvenMax = No" . PHP_EOL;
} else {
    
    for ($i = 1; $i <= $n; $i++) {
        $num = floatval(readline());
        if ($i % 2 == 0) {
            $evenSum += $num;

            if ($num > $evenMax) {
                $evenMax = $num;
            }
            if ($num < $evenMin) {
                $evenMin = $num;
            }
        } else {
            $oddSum += $num;
            if ($num > $oddMax) {
                $oddMax = $num;
            }
            if ($num < $oddMin) {
                $oddMin = $num;
            }
        }
    }
    echo "OddSum = $oddSum" . PHP_EOL;
    echo "OddMin = $oddMin" . PHP_EOL;
    echo "OddMax = $oddMax" . PHP_EOL;
    echo "EvenSum = $evenSum" . PHP_EOL;
    echo "EvenMin = $evenMin" . PHP_EOL;
    echo "EvenMax = $evenMax" . PHP_EOL;
}
?>
