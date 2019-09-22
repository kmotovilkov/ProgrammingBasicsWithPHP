<?php

$allSteps = 0;
$command = 0;
while (true) {
    $command = readline();
    if ($command == "Going home") {
        $stepToHome = intval(readline());
        $allSteps += $stepToHome;
        break;
    }
    $steps = intval($command);
    $allSteps += $steps;
    if ($allSteps >= 10000) {
        break;
    }
}
if ($allSteps >= 10000) {
    echo "Goal reached! Good job!";
} else {
    $diffSteps = 10000 - $allSteps;
    echo "$diffSteps more steps to reach goal.";
}
