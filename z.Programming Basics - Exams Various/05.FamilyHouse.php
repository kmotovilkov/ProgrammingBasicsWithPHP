<?php

$meseciSrRazhod = intval(readline());
$sumSmetkaTok = 0;
$sumSmetkaVoda = 0;
$sumSmetkaInternet = 0;
$sumDrugi = 0;
$obshtoSumaDrugi = 0;
$sredenRazhod = 0;


for ($i = 1; $i <= $meseciSrRazhod; $i++) {
    $smetkaTok = floatval(readline());
    $sumSmetkaTok += $smetkaTok;
    $sumSmetkaVoda = $meseciSrRazhod * 20;
    $sumSmetkaInternet = $meseciSrRazhod * 15;
    while ($i <= $meseciSrRazhod) {
        $sumDrugi = ($smetkaTok + 20 + 15) + (($smetkaTok + 20 + 15) * 0.20);
        $obshtoSumaDrugi += $sumDrugi;
        break;
    }
    $sredenRazhod = ($sumSmetkaTok + $sumSmetkaVoda + $sumSmetkaInternet + $obshtoSumaDrugi) / $meseciSrRazhod;
}
printf("Electricity: %.2f lv" . PHP_EOL, $sumSmetkaTok);
printf("Water: %.2f lv" . PHP_EOL, $sumSmetkaVoda);
printf("Internet: %.2f lv" . PHP_EOL, $sumSmetkaInternet);
printf("Other: %.2f lv" . PHP_EOL, $obshtoSumaDrugi);
printf("Average: %.2f lv" . PHP_EOL, $sredenRazhod);
