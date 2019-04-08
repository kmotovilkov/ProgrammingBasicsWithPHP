<?php

$moneyNeeded = floatval(readline());
$avaibleMoney = floatval(readline());

$spendCounter = 0;
$dayCounter = 0;

while (!($avaibleMoney > $moneyNeeded)) {
    $action = readline();
    $sum = floatval(readline());
    $dayCounter++;

    if ($action == "spend") {
        $spendCounter++;
        if ($spendCounter >= 5) {
            echo "You can't save the money.". PHP_EOL;
            echo $dayCounter;
            return;
        } else {
            $avaibleMoney -= $sum;
            if ($avaibleMoney < $sum) {
                $avaibleMoney = 0;
            }
        }
    } else if ($action == "save") {
        $spendCounter = 0;
        $avaibleMoney += $sum;
        if ($avaibleMoney >= $moneyNeeded) {
            printf("You saved the money for %d days.", $dayCounter);
            return;   
        }
    }
}

if ($avaibleMoney >= $moneyNeeded) {
    printf("You saved the money for %d days.", $dayCounter);
}
?>
