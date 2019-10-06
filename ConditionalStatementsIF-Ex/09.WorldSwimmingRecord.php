<?php

$recordInSeconds = floatval(readline());
$meters = floatval(readline());
$secondsForOneMeter = floatval(readline());

$time1 = $meters * $secondsForOneMeter;
$time2 = floor($meters / 15);
$time2 *= 12.5;

$totalTime = $time1 + $time2;

if ($totalTime >= $recordInSeconds) {

    $neededTimeForRecord = $totalTime - $recordInSeconds;

    printf("No, he failed! He was %.2f seconds slower.", $neededTimeForRecord);
} else {
    printf(" Yes, he succeeded! The new world record is %.2f seconds.", $totalTime);
}
