<?php

$speed = floatval(readline());
if ($speed <= 10) {
    echo "slow" . PHP_EOL;
} elseif ($speed > 10 && $speed <= 50) {
    echo "average" . PHP_EOL;
} elseif ($speed > 50 && $speed <= 150) {
    echo "fast" . PHP_EOL;
} elseif ($speed > 150 && $speed <= 1000) {
    echo "ultra fast" . PHP_EOL;
} elseif ($speed > 1000) {
    echo "extremely fast" . PHP_EOL;
}
