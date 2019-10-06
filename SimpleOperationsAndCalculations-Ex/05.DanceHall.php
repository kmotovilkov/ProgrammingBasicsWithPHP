<?php

$l = floatval(readline());
$w = floatval(readline());
$a = floatval(readline());

$areaH = ($l * 100) * ($w * 100);
$areaW = ($a * 100) * ($a * 100);
$areaB = $areaH / 10;
$freeS = $areaH - $areaW - $areaB;
$numberD = $freeS / (40 + 7000);

echo floor($numberD);

        
