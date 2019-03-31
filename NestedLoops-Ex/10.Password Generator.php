<?php

$n = intval(readline());
$l = intval(readline());
for ($d1 = 1; $d1 <= $n; $d1++) {
    for ($d2 = 1; $d2 <= $n; $d2++) {
        for ($d3 = ord('a'); $d3 <= ord('`') + $l; $d3++) {
            for ($d4 = ord('a'); $d4 <= ord('`') + $l; $d4++) {
                for ($d5 = max($d1, $d2) + 1; $d5 <= $n; $d5++) {
                    echo $d1 . $d2 . chr($d3) . chr($d4) . $d5 . " ";
                }
            }
        }
    }
}
