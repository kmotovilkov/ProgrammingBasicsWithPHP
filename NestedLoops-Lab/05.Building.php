<?php

$floors = intval(readline());
$rooms = intval(readline());

for ($d1 = $floors; $d1 >= 1; $d1--) {
    for ($d2 = 0; $d2 < $rooms; $d2++) {
        if ($d1 == $floors) {
            echo "L$d1$d2 ";
        } else if ($d1 % 2 == 0) {
            echo "O$d1$d2 ";
        }else{
            echo "A$d1$d2 ";
        }
    }echo PHP_EOL;
}
?>
