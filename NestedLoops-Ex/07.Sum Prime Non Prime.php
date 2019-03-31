<?php

$prNum = 0;
$noPrNum = 0;

while (1) {
    $number = readline();
    if ($number == "stop") {
        break;
    }
    if ($number < 0) {
echo "Number is negative." . PHP_EOL;
        continue;
    }
    if ($number == 1) {
        $noPrNum++;
        continue;
    }
    $isPr = TRUE;
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            $isPr = FALSE;
            break;
        }
    }
    if ($isPr) {
        $prNum += $number;
    } else {
        $noPrNum += $number;
    }
}
echo "Sum of all prime numbers is: $prNum" . PHP_EOL;
echo "Sum of all non prime numbers is: $noPrNum" . PHP_EOL;

?>
