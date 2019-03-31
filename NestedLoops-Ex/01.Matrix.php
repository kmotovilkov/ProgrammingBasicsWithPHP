<?php

$a = intval(readline());
$b = intval(readline());
$c = intval(readline());
$d = intval(readline());

for ($x1 = $a; $x1 <= $b; $x1++) {
    for ($x2 = $a; $x2 <= $b; $x2++) {
        if ($x1 != $x2) {
            for ($x3 = $c; $x3 <= $d; $x3++) {
                for ($x4 = $c; $x4 <= $d; $x4++) {
                    if ($x3 != $x4) {
                        if ($x1 + $x3 == $x2 + $x4) {
                            echo $x1 . $x2 . PHP_EOL;
                            echo $x4 . $x3 . PHP_EOL;
                            echo PHP_EOL;
                        }
                    }
                }
            }
        }
    }
}
?>
