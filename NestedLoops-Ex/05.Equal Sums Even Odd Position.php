<?php

$a = intval(readline());
$b = intval(readline());

for ($i = $a; $i <= $b; $i++) {
    $x1 = ($i / 100000) % 10;
    $x2 = ($i / 10000) % 10;
    $x3 = ($i / 1000) % 10;
    $x4 = ($i / 100) % 10;
    $x5 = ($i / 10) % 10;
    $x6 = $i % 10;
    $evenSum = $x1 + $x3 + $x5;
    $oddSum = $x2 + $x4 + $x6;
    if ($evenSum == $oddSum) {
        echo "$i ";
    }
}
?>
