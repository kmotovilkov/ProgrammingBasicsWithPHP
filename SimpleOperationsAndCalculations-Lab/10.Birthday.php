<?php

$a = intval(readline());
$b = intval(readline());
$c = intval(readline());
$d = floatval(readline());
$e = number_format($a * $b * $c * (1 - $d * .01) * 0.001, 3, ".", "");
echo $e;


