<?php

$bonus = 0;
$points = intval(readline());
if ($points <= 100) {
    $bonus += 5;
} elseif ($points > 100 && $points < 1000) {
    $bonus = $bonus + ($points * 0.2);
} elseif ($points > 1000) {
    $bonus = $bonus + ($points * 0.1);
}
if ($points % 2 == 0) {
    $bonus += 1;
} elseif (substr(strval($points), -1) == "5") {
    $bonus += 2;
}
echo $bonus . PHP_EOL;
echo $bonus + $points;
