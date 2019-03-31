<?php

$quota = intval(readline());
$fishCount = 0;
$payedMoney = 0;
$earnedMoney = 0;
 
while (1) {
    if ($fishCount == $quota) {
        echo "Lyubo fulfilled the quota!" . PHP_EOL;
        break;
    }
    $fishName = readline();
    if ($fishName == "Stop") {
        break;
    }
    $fishCount++;
    $fishASCII = 0;
    for ($i = 0; $i < strlen($fishName); $i++) {
        $letter = $fishName[$i];
        $fishASCII += ord($letter);
    }
    $fishKG = floatval(readline());
    $fishPrice = $fishASCII / $fishKG;
    if ($fishCount % 3 == 0) {
        $earnedMoney += $fishPrice;
    } else {
        $payedMoney += $fishPrice;
    }
}
 
if ($earnedMoney > $payedMoney) {
    printf("Lyubo's profit from %d fishes is %.2f leva.", $fishCount, ($earnedMoney - $payedMoney));
} else {
    printf("Lyubo lost %.2f leva today.", ($payedMoney - $earnedMoney));
}

?>
