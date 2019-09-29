<?php

$year = readline();
$p = intval(readline());
$hWeekends = intval(readline());
$sofiaWeekends = 48 - $hWeekends;
$playDays = ($sofiaWeekends * 3.0 / 4) + ($p * 2.0 / 3) + $hWeekends;
if ($year == "normal") {
    echo floor($playDays);
} else {
    echo floor($playDays * 0.15 + $playDays);
}


