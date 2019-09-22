<?php

$min = PHP_INT_MAX;
$max = PHP_INT_MIN;
while (TRUE) {
    $command = readline();
    if ($command == "END")
        break;
    if ($command < $min) {
        $min = $command;
    }
    if ($command > $max) {
        $max = $command;
    }
}
echo "Max number: " . $max . PHP_EOL;
echo "Min number: " . $min;
