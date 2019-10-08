<?php

$a = intval(readline());
$b = intval(readline());
$paroliBroi = intval(readline());
$simvol1 = 35;
$simvol2 = 64;
$broqch = 0;

for ($i = 1; $i <= $a; $i++) {
    for ($j = 1; $j <= $b; $j++) {
        echo chr($simvol1) . chr($simvol2) . $i . $j . 
            chr($simvol2) . chr($simvol1) . "|";
        $broqch++;
        $simvol1++;
        if ($simvol1 == 56) {
            $simvol1 = 35;
        }

        $simvol2++;
        if ($simvol2 == 97) {
            $simvol2 = 64;
        }
        if ($broqch == $paroliBroi) {
            return;
        }
    }
}
