<?php

$number = intval(readline());

if ($number > 200) {
    echo "Greater than 200" . PHP_EOL;
} else if ($number >= 100) {
    echo "Between 100 and 200" . PHP_EOL;
} else if ($number <= 100) {
    echo "Less than 100" . PHP_EOL;
}
