<?php

$n = intval(readline());
$current = 1;
$isBigger = FALSE;

for ($rows = 1; $rows <= $n; $rows++) {
    for ($cols = 1; $cols <= $rows; $cols++) {
        if ($current > $n) {
            $isBigger = TRUE;
            break;
        }
        echo "$current ";
        $current++;
    }
    if ($isBigger) {
        break;
    }
    echo PHP_EOL;
}

?>
