<?php

$food = readline();

if ($food == "banana"
    || $food == "apple" || $food == "kiwi"
    || $food == "cherry" || $food == "lemon"
    || $food == "grapes") {
    echo "fruit";

} else if ($food == "tomato" || $food == "cucumber" ||
    $food == "pepper" || $food == "carrot") {
    echo "vegetable";

} else {
    echo "unknown";
}
