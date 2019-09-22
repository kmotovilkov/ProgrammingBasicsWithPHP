<?php

$name = readline();
$rerunCounter = 0;
$grades = 1;
$sum = 0;

while ($grades <= 12) {
    $grade = floatval(readline());
    if ($grade < 4) {
        $rerunCounter++;
        if ($rerunCounter > 1) {
            break;
        }
    }
    if ($grade >= 4) {
        $sum += $grade;
        $grades++;
    }
}
if ($grades == 13) {
    $average = $sum / 12;
    printf("%s graduated. Average grade: %.2f", $name, $average);
} else {
    echo "$name has been excluded at $grades grade";
}
