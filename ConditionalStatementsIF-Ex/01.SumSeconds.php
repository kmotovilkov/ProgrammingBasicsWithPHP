<?php

$time1 = intval(readline());
$time2 = intval(readline());
$time3 = intval(readline());

$sumTime = $time1 + $time2 + $time3;
$sec = $sumTime % 60;
$min = ($sumTime / 60) % 60;
if ($sumTime > 0 && $sumTime <= 59) {
    printf("0:%02d" . PHP_EOL, $sec);
} elseif ($sumTime >= 60 && $sumTime <= 119) {
    printf("1:%02d" . PHP_EOL, $sec);
} elseif ($sumTime >= 120 && $sumTime <= 179) {
    printf("2:%02d" . PHP_EOL, $sec);
}
