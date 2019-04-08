<?php

$coins = floatval(readline());
$moneti = $coins * 100;
$br = 0;

while ($moneti >= 200) {
    $moneti -= 200;
    $br++;
}
while ($moneti >= 100) {
    $moneti -= 100;
    $br++;
}
while ($moneti >= 50) {
    $moneti -= 50;
    $br++;
}
while ($moneti >= 20) {
    $moneti -= 20;
    $br++;
}
while ($moneti >= 10) {
    $moneti -= 10;
    $br++;
}
while ($moneti >= 5) {
    $moneti -= 5;
    $br++;
}
while ($moneti >= 2) {
    $moneti -= 2;
    $br++;
}
while ($moneti >= 1) {
    $moneti -= 1;
    $br++;
}
echo "$br";
?>
