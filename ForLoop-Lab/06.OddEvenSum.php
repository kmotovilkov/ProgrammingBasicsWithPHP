<?php

$n = intval(readline());
$oddSum = 0;
$evenSum = 0;
for ($i = 0; $i <= $n; $i++) {
    $num = intval(readline());
    if ($i % 2 == 0) {
        $oddSum += $num;
    } else {
        $evenSum += $num;
    }
}

if ($oddSum == $evenSum) {
    echo "Yes, sum = $oddSum";
} else {
    echo "No, diff = " . abs($oddSum - $evenSum);
}
?>
