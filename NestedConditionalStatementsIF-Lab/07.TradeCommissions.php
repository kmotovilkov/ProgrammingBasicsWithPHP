<?php

$town = strtolower(readline());
$sales = floatval(readline());
$commission = -1;

if ($town == "sofia") {
    if ($sales >= 0 && $sales <= 500)
        $commission = 0.05;
    else if ($sales > 500 && $sales <= 1000)
        $commission = 0.07;
    else if ($sales > 1000 && $sales <= 10000)
        $commission = 0.08;
    else if ($sales > 10000)
        $commission = 0.12;
}

if ($town == "varna") {
    if ($sales >= 0 && $sales <= 500)
        $commission = 0.045;
    else if ($sales > 500 && $sales <= 1000)
        $commission = 0.075;
    else if ($sales > 1000 && $sales <= 10000)
        $commission = 0.10;
    else if ($sales > 10000)
        $commission = 0.13;
} else if ($town == "plovdiv") {
    if ($sales >= 0 && $sales <= 500)
        $commission = 0.055;
    else if ($sales > 500 && $sales <= 1000)
        $commission = 0.08;
    else if ($sales > 1000 && $sales <= 10000)
        $commission = 0.12;
    else if ($sales > 10000)
        $commission = 0.145;
}

if ($commission >= 0) {
    printf("%.2f", $sales * $commission);
} else {
    echo "error";
}
