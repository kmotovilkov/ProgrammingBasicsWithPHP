<?php

$kolHrana = intval(readline());
$kolHranaGr = $kolHrana * 1000;
$hrana = 0;

while (TRUE) {
    $command = readline();
    if ($command == "Adopted") {
        break;

    }

    $hrana += intval($command);
}
$diff = abs($hrana - $kolHranaGr);
if ($hrana <= $kolHranaGr) {

    echo "Food is enough! Leftovers: $diff grams.";
} else {

    echo "Food is not enough. You need $diff grams more.";
}
