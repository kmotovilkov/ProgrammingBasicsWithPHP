<?php

$n = intval(readline());
for ($x1 = 0; $x1 <= 9; $x1++) {
    for ($x2 = 0; $x2 <= 9; $x2++) {
        for ($x3 = 0; $x3 <= 9; $x3++) {
            for ($x4 = 0; $x4 <= 9; $x4++) {
                for ($x5 = 0; $x5 <= 9; $x5++) {
                    for ($x6 = 0; $x6 <= 9; $x6++) {
                        if ($x1 * $x2 * $x3 * $x4 * $x5 * $x6 == $n) {
                            echo "$x1$x2$x3$x4$x5$x6 ";
                        }
                    }
                }
            }
        }
    }
}

?>
