<?php

$k = intval(readline());
$l = intval(readline());
$m = intval(readline());
$n = intval(readline());
$broqch = 0;

for ($d1 = $k; $d1 <= 8; $d1++) {
    for ($d2 = 9; $d2 >= $l; $d2--) {
        for ($d3 = $m; $d3 <= 8; $d3++) {
            for ($d4 = 9; $d4 >= $n; $d4--) {

                if ($d1 % 2 == 0 && $d2 % 2 == 1 && 
                $d3 % 2 == 0 && $d4 % 2 == 1) {

                    if ($d1 == $d3 && $d2 == $d4) {
                        echo "Cannot change the same player." . PHP_EOL;
                    } else {
                        echo "$d1$d2 - $d3$d4" . PHP_EOL;
                        $broqch++;
                    }
                }


                if ($broqch == 6) {
                    return;
                }
            }
        }
    }
}
