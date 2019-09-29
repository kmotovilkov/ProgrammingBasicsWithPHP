<?php

$degrees = intval(readline());
$dayTime = readline();
$outFit = "";
$shoes = "";

switch ($dayTime) {
    case "Morning":
        if ($degrees >= 10 && $degrees <= 18) {
            $outFit = "Sweatshirt";
            $shoes = "Sneakers";
        } else if ($degrees > 18 && $degrees <= 24) {
            $outFit = "Shirt";
            $shoes = "Moccasins";
        } else if ($degrees >= 25) {
            $outFit = "T-Shirt";
            $shoes = "Sandals";
        }
        break;
    case "Afternoon":
        if ($degrees >= 10 && $degrees <= 18) {
            $outFit = "Shirt";
            $shoes = "Moccasins";
        } else if ($degrees > 18 && $degrees <= 24) {
            $outFit = "T-Shirt";
            $shoes = "Sandals";
        } else if ($degrees >= 25) {
            $outFit = "Swim Suit";
            $shoes = "Barefoot";
        }
        break;
    case "Evening":

        $outFit = "Shirt";
        $shoes = "Moccasins";
        break;
}
printf("It's %d degrees, get your %s and %s.", $degrees, $outFit, $shoes);






