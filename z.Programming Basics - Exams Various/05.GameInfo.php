<?php

$otbor = readline();
$broiSreshti = intval(readline());
$sumVreme = 0;
$srednoVreme = 0;
$machprodyljeniq = 0;
$machDuzpi = 0;

for ($i = 1; $i <= $broiSreshti; $i++) {
    $prodSreshta = intval(readline());
    $sumVreme += $prodSreshta;
    $srednoVreme = $sumVreme / $broiSreshti;

    if ($prodSreshta > 90 && $prodSreshta <= 120) {
        $machprodyljeniq++;
    } elseif ($prodSreshta > 120) {
        $machDuzpi++;
    }
}
printf("$otbor has played $sumVreme minutes. 
Average minutes per game: %.2f" . PHP_EOL, $srednoVreme);
echo "Games with penalties: $machDuzpi" . PHP_EOL;
echo "Games with additional time: $machprodyljeniq";
