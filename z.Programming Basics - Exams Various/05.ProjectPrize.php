<?php

$chastiProekt = intval(readline());
$nagrada = floatval(readline());
$tochkiProekt = 0;

for ($i = 1; $i <= $chastiProekt; $i++) {
    $tochkiEtap = intval(readline());
    if ($i % 2 == 0) {
        $tochkiEtap *= 2;
    }
    $tochkiProekt += $tochkiEtap;
}
$nagrada1 = $tochkiProekt * $nagrada;
printf("The project prize was %.2f lv.", $nagrada1);
