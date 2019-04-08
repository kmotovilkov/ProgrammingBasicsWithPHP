<?php

$n = intval(readline());
$sum1 = 0;
$sum2 = 0;
for ($i = 0; $i < $n; $i++) {
    $num = intval(readline());
    $sum1 += $num;
}
for ($i = 0; $i < $n; $i++) {
    $num = intval(readline());
    $sum2 += $num;
}
if($sum1==$sum2){
    echo "Yes, sum = $sum1";
}else{
    echo "No, diff = " . abs($sum1-$sum2);
}
?>
