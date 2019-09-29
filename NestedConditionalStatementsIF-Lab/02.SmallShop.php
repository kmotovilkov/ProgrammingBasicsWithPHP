<?php

$productName = strtolower(readline());
$town = strtolower(readline());
$quantity = floatval(readline());
$price = -1;

if ($town == "sofia") {
    if ($productName == "coffee") {
        $price = 0.50 * $quantity;
    } else if ($productName == "water") {
        $price = 0.80 * $quantity;
    } else if ($productName == "beer") {
        $price = 1.20 * $quantity;
    } else if ($productName == "sweets") {
        $price = 1.45 * $quantity;
    } else if ($productName == "peanuts") {
        $price = 1.60 * $quantity;
    }
}
if ($town == "plovdiv") {
    if ($productName == "coffee") {
        $price = 0.40 * $quantity;
    } else if ($productName == "water") {
        $price = 0.70 * $quantity;
    } else if ($productName == "beer") {
        $price = 1.15 * $quantity;
    } else if ($productName == "sweets") {
        $price = 1.30 * $quantity;
    } else if ($productName == "peanuts") {
        $price = 1.50 * $quantity;
    }
} else if ($town == "varna") {
    if ($productName == "coffee") {
        $price = 0.45 * $quantity;
    } else if ($productName == "water") {
        $price = 0.70 * $quantity;
    } else if ($productName == "beer") {
        $price = 1.10 * $quantity;
    } else if ($productName == "sweets") {
        $price = 1.35 * $quantity;
    } else if ($productName == "peanuts") {
        $price = 1.55 * $quantity;
    }
}
if ($price > 0) {
    echo "$price" . PHP_EOL;
} else {
    echo "Not a valid input" . PHP_EOL;
}

