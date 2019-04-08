<?php

$cakeWidth = intval(readline());
$cakeLength = intval(readline());
$wholeCake = $cakeLength * $cakeWidth;
$piecesTaken = 0;
$pieces = readline();

while ($pieces != "STOP") {
    $piecesTaken = intval($pieces);
    $wholeCake -= $piecesTaken;

    if ($wholeCake < 0) {
        echo "No more cake left! You need" . " " 
                . abs($wholeCake) . " " . "pieces more.";
        break;
    }
    $pieces = readline();
}
if ($pieces == "STOP") {
    echo "$wholeCake pieces are left.";
}
?>
