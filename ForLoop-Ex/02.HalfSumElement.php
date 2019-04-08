<?php

$n = intval(readline());
$sum = 0;
$max = PHP_INT_MIN;

for ($i = 0; $i < $n; $i++) {
    $m = intval(readline());
    $sum += $m;
    if ($i == 0) {
        $max = $m;
    }
    if ($m > $max) {
        $max = $m;
    }
}
$sum -= $max;
if ($sum == $max) {
    echo "Yes" . PHP_EOL;
    echo "Sum = $sum";
} else {
    echo "No" . PHP_EOL;
    $diff = abs($max - $sum);
    echo "Diff = $diff";
}

?>
