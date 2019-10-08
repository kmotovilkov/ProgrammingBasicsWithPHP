<?php

$minuti = intval(readline());
$ime = readline();

if ($minuti == 0) {
    echo "Match has just began!" . PHP_EOL;
} else if ($minuti < 45) {
    echo "First half time." . PHP_EOL;
} else if ($minuti >= 45) {
    echo "Second half time." . PHP_EOL;
}
if ($minuti >= 1 && $minuti <= 10) {
    echo "$ime missed a penalty." . PHP_EOL;
    if ($minuti % 2 == 0) {
        echo "$ime was injured after the penalty." . PHP_EOL;
    }
} else if ($minuti > 10 && $minuti <= 35) {
    echo "$ime received yellow card." . PHP_EOL;
    if (!($minuti % 2 == 0)) {
        echo "$ime got another yellow card." . PHP_EOL;
    }
} else if ($minuti > 35 && $minuti < 45) {
    echo "$ime SCORED A GOAL !!!" . PHP_EOL;
} else if ($minuti > 45 && $minuti <= 55) {
    echo "$ime got a freekick." . PHP_EOL;
    if ($minuti % 2 == 0) {
        echo "$ime missed the freekick." . PHP_EOL;
    }
} else if ($minuti > 55 && $minuti <= 80) {
    echo "$ime missed a shot from corner." . PHP_EOL;
    if (!($minuti % 2 == 0)) {
        echo "$ime has been changed with another player." . PHP_EOL;
    }
} else if ($minuti > 80 && $minuti <= 90) {
    echo "$ime SCORED A GOAL FROM PENALTY !!!" . PHP_EOL;
}
   
