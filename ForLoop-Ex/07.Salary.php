<?php

$n = intval(readline());
$salary = intval(readline());

for ($i = 1; $i <= $n; $i++) {
    $type = readline();
    switch ($type) {
        case "Facebook":
            $salary -= 150;
            break;
        case "Instagram":
            $salary -= 100;
            break;
        case "Reddit":
            $salary -= 50;
            break;
    }
    if ($salary <= 0) {
        echo "You have lost your salary.";
        return;
    }
}
echo $salary;


