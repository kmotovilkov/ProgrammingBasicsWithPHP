<?php

$name = readline();
$counter = 1;
$sum = 0;
while ($counter <= 12) {
    $grade = floatval(readline());
    if ($grade >= 4) {
        $sum += $grade;
        $counter++;
    }
}
$average = $sum / 12;
printf("%s graduated. Average grade: %.2f", $name, $average);

?>
