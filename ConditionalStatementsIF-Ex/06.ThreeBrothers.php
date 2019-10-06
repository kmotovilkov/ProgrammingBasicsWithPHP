<?php

$time1 = floatval(readline());
$time2 = floatval(readline());
$time3 = floatval(readline());
$timeFisching = floatval(readline());

$cleanTime = 1 / (1 / $time1 + 1 / $time2 + 1 / $time3);
$timeWithrest = $cleanTime + ($cleanTime * 0.15);
$timeLeft = abs($timeFisching - $timeWithrest);
printf("Cleaning time: " . "%.2f" . PHP_EOL, $timeWithrest);

if ($timeFisching > $timeWithrest) {
    echo "Yes, there is a surprise - time left -> " .
        floor($timeLeft) . " hours.";
} else {
    echo "No, there isn't a surprise - shortage of time -> " . ceil($timeLeft) . " hours.";
}
