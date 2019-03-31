<?php

$a = intval(readline());
$b = intval(readline());

for ($i = $a; $i <= $b; $i++) {
    $fifhtDigit = $i % 10;
    $fourDigit = ($i / 10) % 10;
    $thirdDigit = ($i / 100) % 10;
    $secondDigit = ($i / 1000) % 10;
    $firstDigit = ($i / 10000) % 10;

    $leftSum = $firstDigit + $secondDigit;
    $rightSum = $fourDigit + $fifhtDigit;
    if ($leftSum == $rightSum) {
        echo "$i ";
    } else if (min($leftSum, $rightSum) + $thirdDigit == max($leftSum, $rightSum)) {
        echo "$i ";
    }
}
?>
