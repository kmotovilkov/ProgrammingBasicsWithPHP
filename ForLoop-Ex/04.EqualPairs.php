<?php

$n = intval(readline());
$min = PHP_INT_MAX;
$max = PHP_INT_MIN;
$lastSum = 0;
$diff = 0;

for ($i = 0; $i < $n; $i++) {
    $first = intval(readline());
    $second = intval(readline());
    $sum = $first + $second;

    if ($i > 0) {
        $diff = abs($lastSum - $sum);
    }
    $lastSum = $sum;

}
if ($diff == 0) {
    echo "Yes, value=$lastSum";
} else {
    echo "No, maxdiff=$diff";
}
?>
