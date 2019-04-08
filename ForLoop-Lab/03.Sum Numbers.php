<?php

$n = intval(readline());
$sum = 0;
for ($i = 0; $i < $n; $i++) {
    $num = intval(readline());
    $sum += $num;
}
echo $sum . PHP_EOL;

?>
