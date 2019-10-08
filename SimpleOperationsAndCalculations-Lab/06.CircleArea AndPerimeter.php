<?php

echo "Enter circle radios. r = ";
$r = floatval(readline());
$area = pi() * $r * $r;
$perimeter = 2 * pi() * $r;

echo "Area = " . $area . PHP_EOL;
echo "Perimeter = " . $perimeter;
