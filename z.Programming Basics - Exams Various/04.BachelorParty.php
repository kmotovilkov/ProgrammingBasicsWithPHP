<?php

$sumIzpalnitel = intval(readline());
$broiHora = intval(readline());
$sumGrup = 0;
$obshtoSuma = 0;
$broqch = 0;

while ($broiHora != "The restaurant is full") {
    $broiHoraVGrupa = intval($broiHora);
    $broqch += $broiHoraVGrupa;

    if ($broiHoraVGrupa < 5) {
        $sumGrup += $broiHoraVGrupa * 100;
    } else if ($broiHoraVGrupa >= 5) {
        $sumGrup += $broiHoraVGrupa * 70;
    }
    $broiHora = intval(readline());
}
if ($sumGrup >= $sumIzpalnitel) {
    $diff = $sumGrup - $sumIzpalnitel;
    echo "You have $broqch guests and $diff leva left.";
} else {

    echo "You have $broqch guests and $sumGrup leva income, but no singer.";
}
