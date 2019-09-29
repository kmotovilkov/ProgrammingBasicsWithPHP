<?php

$examH = intval(readline());
$examM = intval(readline());
$arrivalH = intval(readline());
$arrivalM = intval(readline());

$examTime = ($examH * 60) + $examM;
$arrivalTime = ($arrivalH * 60) + $arrivalM;
$diffTime = $arrivalTime - $examTime;
$secondDiff = $examTime - $arrivalTime;

if ($diffTime <= 59 && $diffTime > 0) {
    echo "Late" . PHP_EOL;
    printf(" %.d minutes after the start", $diffTime);
} else if ($diffTime >= 60) {
    $hour = $diffTime / 60;
    $minutes = $diffTime % 60;
    echo "Late" . PHP_EOL;
    printf("%.d:%.d hours after the start", $hour, $minutes);
} else if ($secondDiff == 0) {
    echo "On time" . PHP_EOL;
} else if ($secondDiff <= 30 && $secondDiff > 0) {
    echo "On time" . PHP_EOL;
    printf("%.d minutes before the start", $secondDiff);
} else if ($secondDiff > 30 && $secondDiff <= 60) {
    $minutes = ($diffTime % 60);
    echo "Early" . PHP_EOL;
    printf(" %.d minutes before the start", $minutes);
} else if ($secondDiff >= 60) {
    $hour = ($diffTime / 60);
    $minutes = ($diffTime % 60);
    echo "Early" . PHP_EOL;
    printf("%.d:%.d hours before the start", $hour, $minutes);
}

