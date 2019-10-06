<?php

$a = intval(readline());
$b = floatval(readline());
$c = floatval(readline());
$areaP = $a * ($b + (2 * 0.30)) * ($c + (2 * 0.30));
$areaK = $a * ($b / 2) * ($b / 2);
$prD = ($areaP * 7) + ($areaK * 9);
$prL = $prD * 1.85;
printf("%.2f USD" . PHP_EOL, $prD);
printf("%.2f BGN", $prL);
 


