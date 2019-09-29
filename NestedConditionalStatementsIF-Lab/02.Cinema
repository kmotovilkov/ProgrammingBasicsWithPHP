<?php

$projection = readline();
$rows = intval(readline());
$cols = intval(readline());
$count = $rows * $cols;
$price = 0;
if ($projection == "Premiere") {
    $price = $count * 12.00;
} else if ($projection == "Normal") {
    $price = $count * 7.50;
} else if ($projection == "Discount") {
    $price = $count * 5.00;
}
printf("%.2f leva", $price);
