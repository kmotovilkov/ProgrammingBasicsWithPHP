<?php

$input = strtolower(readline());
$sum = 0;
for ($i = 0; $i < strlen($input); $i++) {

    switch ($input[$i]) {
        case"a":
            $sum++;
            break;
        case"e":
            $sum += 2;
            break;
        case "i":
            $sum += 3;
            break;
        case "o":
            $sum += 4;
            break;
        case "u":
            $sum += 5;
            break;
        default :
            break;
    }
}
echo "$sum";
?>
