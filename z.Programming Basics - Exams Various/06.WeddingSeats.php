<?php

$a = readline();
$b = intval(readline());
$c = intval(readline());
$broqch = 0;

for ($i = 'A'; $i <= $a; $i++) {
    for ($j = 1; $j <= $b; $j++) {
        if ($j % 2 == 1) {
            for ($d = 1; $d <= $c; $d++) {
                echo "$i$j" . chr($d + 96) . PHP_EOL;
                $broqch++;
            }
        } else if ($j % 2 == 0) {
            for ($d = 1; $d <= $c + 2; $d++) {
                echo "$i$j" . chr($d + 96) . PHP_EOL;
                $broqch++;
            }
        }
    }
    $b++;
}

echo $broqch;
