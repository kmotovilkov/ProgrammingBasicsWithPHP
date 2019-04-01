<?php

$destination = "";
$moneyNeed = 0;
$saving = "";
$money = "";

while (true) {
    $destination = readline();
    if ($destination == "End") {
        break;
    }
    $moneyNeed = intval(readline());
    $money = 0;

    while ($money < $moneyNeed) {
        $saving = readline();

        if ($saving == "End") {
            return;
        }
        $money += intval($saving);
        if ($money >= $moneyNeed) {
            echo "Going to $destination!" . PHP_EOL;
        }
    }

}
?>
