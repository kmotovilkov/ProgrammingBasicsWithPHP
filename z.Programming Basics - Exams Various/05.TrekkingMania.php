<?php

$broigrupi = intval(readline());
$sumHora = 0;
$musala = 0;
$monblan = 0;
$kilimandjaro = 0;
$k2 = 0;
$everest = 0;

for ($i = 1; $i <= $broigrupi; $i++) {
    $broiHoraVGrupa = intval(readline());
    $sumHora += $broiHoraVGrupa;
    if ($broiHoraVGrupa <= 5) {
        $musala += $broiHoraVGrupa;
    } else if ($broiHoraVGrupa >= 6 && $broiHoraVGrupa <= 12) {
        $monblan += $broiHoraVGrupa;
    } else if ($broiHoraVGrupa >= 13 && $broiHoraVGrupa <= 25) {
        $kilimandjaro += $broiHoraVGrupa;
    } else if ($broiHoraVGrupa >= 26 && $broiHoraVGrupa <= 40) {
        $k2 += $broiHoraVGrupa;
    } else if ($broiHoraVGrupa >= 41) {
        $everest += $broiHoraVGrupa;
    }
}
printf("%.2f%%" . PHP_EOL, $musala / $sumHora * 100);
printf("%.2f%%" . PHP_EOL, $monblan / $sumHora * 100);
printf("%.2f%%" . PHP_EOL, $kilimandjaro / $sumHora * 100);
printf("%.2f%%" . PHP_EOL, $k2 / $sumHora * 100);
printf("%.2f%%" . PHP_EOL, $everest / $sumHora * 100);
