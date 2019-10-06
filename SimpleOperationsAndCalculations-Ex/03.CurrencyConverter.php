<?php

$sum = floatval(readline());
$in = readline();
$out = readline();

if ($in === "BGN") {
    if ($out === "USD") {
        $outMoney = $sum / 1.79549;
        printf("%.2f USD", $outMoney);
    } else if ($out == "EUR") {
        $outMoney = $sum / 1.95583;
        printf("%.2f EUR", $outMoney);
    } else if ($out == "GBP") {
        $outMoney = $sum / 2.53405;
        printf("%.2f GBP", $outMoney);
    };
} else if ($in === "USD") {
    if ($out === "BGN") {
        $outMoney = $sum * 1.79549;
        printf("%.2f BGN", $outMoney);
    } else if ($out == "EUR") {
        $outMoney = $sum / 1.08930;
        printf("%.2f EUR", $outMoney);
    } else if ($out == "GBP") {
        $outMoney = $sum / 1.41134;
        printf("%.2f GBP", $outMoney);
    };
} else if ($in === "EUR") {
    if ($out === "BGN") {
        $outMoney = $sum * 1.95583;
        printf("%.2f BGN", $outMoney);
    } else if ($out == "USD") {
        $outMoney = $sum * 1.08930;
        printf("%.2f USD", $outMoney);
    } else if ($out == "GBP") {
        $outMoney = $sum / 1.29564;
        printf("%.2f GBP", $outMoney);
    };
} else if ($in === "GBP") {
    if ($out === "BGN") {
        $outMoney = $sum * 2.53405;
        printf("%.2f BGN", $outMoney);
    } else if ($out == "EUR") {
        $outMoney = $sum * 1.41134;
        printf("%.2f EUR", $outMoney);
    } else if ($out == "USD") {
        $outMoney = $sum * 1.41134;
        printf("%.2f USD", $outMoney);
    }
};
                




        

