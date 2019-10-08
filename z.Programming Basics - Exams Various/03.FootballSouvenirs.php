<?php

$otbor = readline();
$suvenir = readline();
$broiSuveniri = intval(readline());
$cena = 0;

if ($otbor == "Argentina") {
    if ($suvenir == "flags") {
        $cena = 3.25;
    } else if ($suvenir == "caps") {
        $cena = 7.20;
    } else if ($suvenir == "posters") {
        $cena = 5.10;
    } else if ($suvenir == "stickers") {
        $cena = 1.25;
    }
} else if ($otbor == "Brazil") {
    if ($suvenir == "flags") {
        $cena = 4.20;
    } else if ($suvenir == "caps") {
        $cena = 8.50;
    } else if ($suvenir == "posters") {
        $cena = 5.35;
    } else if ($suvenir == "stickers") {
        $cena = 1.20;
    }
} else if ($otbor == "Croatia") {
    if ($suvenir == "flags") {
        $cena = 2.75;
    } else if ($suvenir == "caps") {
        $cena = 6.90;
    } else if ($suvenir == "posters") {
        $cena = 4.95;
    } else if ($suvenir == "stickers") {
        $cena = 1.10;
    }
} else if ($otbor == "Denmark") {
    if ($suvenir == "flags") {
        $cena = 3.10;
    } else if ($suvenir == "caps") {
        $cena = 6.50;
    } else if ($suvenir == "posters") {
        $cena = 4.80;
    } else if ($suvenir == "stickers") {
        $cena = 0.90;
    }
}
$sum = $broiSuveniri * $cena;

if ($suvenir != "flags" && $suvenir != "caps" & $suvenir != "posters" && $suvenir != "stickers") {
    echo "Invalid stock!";
} else if ($otbor != "Argentina" && $otbor != "Brazil" & $otbor != "Croatia" && $otbor != "Denmark") {
    echo "Invalid country!";
} else {
    printf("Pepi bought $broiSuveniri $suvenir of $otbor for %.2f lv.", $sum);
