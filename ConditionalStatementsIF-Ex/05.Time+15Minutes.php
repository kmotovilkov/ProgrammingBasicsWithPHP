<?php
$hour = intval(readline());
$min = intval(readline());

$newMin = $min + 15;

if ($newMin > 59) {
    $hour++;
    $newMin -= 60;
}
if ($hour > 23) {
    $hour -= 24;
}
printf("%d:%02d", $hour, $newMin);
