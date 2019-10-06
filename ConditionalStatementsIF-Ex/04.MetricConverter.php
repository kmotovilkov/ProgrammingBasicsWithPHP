<?php

$number = floatval(readline());
$inMetrics = strval(readline());
$outMetrics = strval(readline());
$result = "";

if ($inMetrics == "mm") {
    $number /= 1000;
    $inMetrics = "m";
} else if ($inMetrics == "cm") {
    $number /= 100;
    $inMetrics = "m";
} else if ($inMetrics == "mi") {
    $number /= 0.000621371192;
    $inMetrics = "m";
} else if ($inMetrics == "in") {
    $number /= 39.3700787;
    $inMetrics = "m";
} else if ($inMetrics == "km") {
    $number = $number / 0.001;
    $inMetrics = "m";
} else if ($inMetrics == "ft") {
    $number /= 3.2808399;
    $inMetrics = "m";
} else if ($inMetrics == "yd") {
    $number /= 1.0936133;
    $inMetrics = "m";
}


if ($inMetrics == "m") {
    if ($outMetrics == "mm") {
        $result = $number * 1000;
    } else if ($outMetrics == "cm") {
        $result = $number * 100;
    } else if ($outMetrics == "mi") {
        $result = $number * 0.000621371192;
    } else if ($outMetrics == "in") {
        $result = $number * 39.3700787;
    } else if ($outMetrics == "km") {
        $result = $number * 0.001;
    } else if ($outMetrics == "ft") {
        $result = $number * 3.2808399;
    } else if ($outMetrics == "yd") {
        $result = $number * 1.0936133;
    } else if ($outMetrics == "m") {
        $result = $number;
    }
}

printf("%.8f", $result);


