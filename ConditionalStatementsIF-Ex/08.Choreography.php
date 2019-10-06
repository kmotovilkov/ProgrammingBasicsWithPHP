<?php

$steps = intval(readline());
$dancers = intval(readline());
$days = intval(readline());

$stepsPerDay = ceil(($steps / $days) / $steps * 100);
$procent = ($stepsPerDay / $dancers);

if ($stepsPerDay <= 13) {
    printf("Yes, they will succeed in that goal! %.2f%%.", $procent) . PHP_EOL;
} else {
    printf("No, they will not succeed in that goal! Required 
    %.2f%% steps to be learned per day.", $procent) . PHP_EOL;


}
        
    
