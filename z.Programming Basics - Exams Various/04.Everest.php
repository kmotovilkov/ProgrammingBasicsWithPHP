<?php

$broqchDni = 1;
$nachalo = 5364;
$vryh = 8848;
$iskacheno = 0;
$comanda = readline();

while (TRUE) {
    if ($comanda === "END") {
        break;
    }
    if ($comanda === "Yes") {
        $broqchDni++;
    }
    if ($broqchDni > 5) {
        break;
    }

    $iskacheno = intval(readline());
    $nachalo += $iskacheno;
    if ($nachalo >= $vryh) {
        break;
    }
    $comanda = readline();
}
if ($nachalo >= $vryh) {
    echo "Goal reached for $broqchDni days!";
} else {
    echo "Failed!" . PHP_EOL . $nachalo;
}
