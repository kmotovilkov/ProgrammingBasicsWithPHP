<?php

$broiKomputri = intval(readline());
$reiting = 0;
$obshtReiting = 0;
$sumaReiting = 0;
$prodajbi = 0;
$pyrvi2cifri = 0;

for ($i = 1; $i <= $broiKomputri; $i++) {
    $vazmojniProdajbi = intval(readline());


    $pyrvi2cifri = floor($vazmojniProdajbi / 10);
    if ($vazmojniProdajbi % 10 == 2) {
        $reiting = 2;
        $sumaReiting += $reiting;
        $prodajbi += 0;
    } else if ($vazmojniProdajbi % 10 == 3) {
        $reiting = 3;
        $sumaReiting += $reiting;
        $prodajbi += $pyrvi2cifri * 0.5;
    } else if ($vazmojniProdajbi % 10 == 4) {
        $reiting = 4;
        $sumaReiting += $reiting;
        $prodajbi += $pyrvi2cifri * 0.7;
    } else if ($vazmojniProdajbi % 10 == 5) {
        $reiting = 5;
        $sumaReiting += $reiting;
        $prodajbi += $pyrvi2cifri * 0.85;
    } else if ($vazmojniProdajbi % 10 == 6) {
        $reiting = 6;
        $sumaReiting += $reiting;
        $prodajbi += $pyrvi2cifri;
    }

    $obshtReiting = $sumaReiting / $broiKomputri;
}
printf("%.2f" . PHP_EOL, $prodajbi);
printf("%.2f", $obshtReiting);
