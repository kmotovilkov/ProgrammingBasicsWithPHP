<?php

$n = intval(readline());
$p1 = 0;
$p2 = 0;
$p3 = 0;

for ($i = 0; $i < $n; $i++) {
    $num = intval(readline());
    if ($num % 2 == 0) {
        $p1++;
    }
    if ($num % 3 == 0) {
        $p2++;
    }
    if ($num % 4 == 0) {
        $p3++;
    }
}
printf("%.2f%%" . PHP_EOL, ($p1 / $n) * 100);
printf("%.2f%%" . PHP_EOL, ($p2 / $n) * 100);
printf("%.2f%%", ($p3 / $n) * 100);

?>
