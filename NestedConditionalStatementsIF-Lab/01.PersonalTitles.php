<?php

$age = intval(readline());
$gender = readline();

if ($age >= 16) {
    if ($gender == "f") {
        echo "Ms.";
    } else {
        echo "Mr.";
    }
} else
    if ($gender == "f") {
        echo "Miss";
    } else {
        echo "Master";
    }
