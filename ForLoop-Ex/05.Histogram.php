<?php

$num = intval(readline());
$numBelow200 = 0;
$num200to399 = 0;
$num400to599 = 0;
$num600to799 = 0;
$numAbove800 = 0;

for ($i = 0; $i < $num; $i++) {
    $cNumber = intval(readline());
    if ($cNumber >= 800) {
        $numAbove800++;
    } else if ($cNumber < 200) {
        $numBelow200++;
    } else if ($cNumber < 400) {
        $num200to399++;
    } else if ($cNumber < 600) {
        $num400to599++;
    } else {
        $num600to799++;
    }
}
$numPercentBelow200 = $numBelow200 / $num * 100.0;
$numPercent200to399 = $num200to399 / $num * 100.0;
$numPercent400to599 = $num400to599 / $num * 100.0;
$numPercent600to799 = $num600to799 / $num * 100.0;
$numPercentAbove800 = $numAbove800 / $num * 100.0;

printf("%.2f", $numPercentBelow200);
echo "%" . PHP_EOL;
printf("%.2f", $numPercent200to399);
echo "%" . PHP_EOL;
printf("%.2f", $numPercent400to599);
echo "%" . PHP_EOL;
printf("%.2f", $numPercent600to799);
echo "%" . PHP_EOL;
printf("%.2f", $numPercentAbove800);
echo "%";


