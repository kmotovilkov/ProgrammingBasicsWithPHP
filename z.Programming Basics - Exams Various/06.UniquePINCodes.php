<?php

$a = intval(readline());
$b = intval(readline());
$c = intval(readline());

for ($i1 = 1; $i1 <= $a; $i1++) {
    for ($i2 = 2; $i2 <= $b; $i2++) {
        for ($i3 = 1; $i3 <= $c; $i3++) {
            if ($i1 % 2 == 0 && ($i3 % 2 == 0)) {
                if ($i2 == 2 || $i2 == 3 || $i2 == 5 || $i2 == 7) {
                    echo "$i1 $i2 $i3" . PHP_EOL;
                }
            }
        }

    }

}
