<?php

$days = intval(readline());
$baker = intval(readline());
$cake = intval(readline());
$waf = intval(readline());
$panc = intval(readline());

$sumCake = $cake * 45;
$sumWaf = $waf * 5.80;
$sumPanc = $panc * 3.20;

$oneDaySum = ($sumCake + $sumWaf + $sumPanc) * $baker;
$campSum = $oneDaySum * $days;
$costSum = $campSum - ($campSum * 0.125);

printf("%.2f", $costSum);
        
        
        




