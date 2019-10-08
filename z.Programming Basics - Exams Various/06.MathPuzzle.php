<?php

$kliuch = intval(readline());
$vid1 = FALSE;
$vid2 = FALSE;

for ($i = 1; $i <= 30; $i++) {
    for ($j = 1; $j <= 30; $j++) {
        for ($k = 1; $k <= 30; $k++) {

            if ($i + $j + $k == $kliuch) {
                if ($i < $j && $j < $k) {
                    $vid1 = TRUE;
                    echo "$i + $j + $k = $kliuch" . PHP_EOL;
                }
            }
            if ($i * $j * $k == $kliuch) {
                if ($i > $j && $j > $k) {
                    $vid2 = TRUE;
                    echo "$i * $j * $k = $kliuch" . PHP_EOL;
                }
            }
        }
    }
}
if ($vid1 == FALSE && $vid2 == FALSE) {
    echo "No!";
}
