<?php

$broiGosti = intval(readline());
$broiPodaraci = intval(readline());

$procentPari = 0;
$procentElUredi = 0;
$procentVaucheri = 0;
$procentDrugi = 0;
$procenGostiPodaraci = 0;
$broqch1 = 0;
$broqch2 = 0;
$broqch3 = 0;
$broqch4 = 0;

for ($i = 1; $i <= $broiPodaraci; $i++) {
    $vidPodarak = readline();

    if ($vidPodarak == "A") {
        $broqch1++;
        $procentPari = ($broqch1 / $broiPodaraci) * 100;
    } else if ($vidPodarak == "B") {
        $broqch2++;
        $procentElUredi = ($broqch2 / $broiPodaraci) * 100;
    } else if ($vidPodarak == "V") {
        $broqch3++;
        $procentVaucheri = ($broqch3 / $broiPodaraci) * 100;
    } else if ($vidPodarak == "G") {
        $broqch4++;
        $procentDrugi = ($broqch4 / $broiPodaraci) * 100;
    }
    $procenGostiPodaraci = (($broqch1 + $broqch2 + $broqch3 + $broqch4) / $broiGosti) * 100;
}


printf("%.2f%%" . PHP_EOL, $procentPari);
printf("%.2f%%" . PHP_EOL, $procentElUredi);
printf("%.2f%%" . PHP_EOL, $procentVaucheri);
printf("%.2f%%" . PHP_EOL, $procentDrugi);
printf("%.2f%%", $procenGostiPodaraci);
