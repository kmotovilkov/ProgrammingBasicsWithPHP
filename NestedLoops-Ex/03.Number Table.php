<?php

$n = intval(readline());
$current = 1;


for ($row = 0; $row < $n; $row++) {
    for ($col = 0; $col < $n; $col++) {
        $current = $row + $col + 1;
        if ($current > $n) {
            $current = 2 * $n - $current;
        }
        echo "$current ";
    }
    echo PHP_EOL;
}
?>
