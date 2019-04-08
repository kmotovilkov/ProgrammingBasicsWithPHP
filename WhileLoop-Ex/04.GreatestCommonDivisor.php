<?php

$a = intval(readline());
$b = intval(readline());
$r = $a % $b;

while ($b != 0) {
    $r = $a % $b;
    $a = $b;
    $b = $r;
}
echo $a;
?>
