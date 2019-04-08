<?php

$n = intval(readline());
$max = PHP_INT_MIN;
$min = PHP_INT_MAX;
for ($i = 0; $i < $n; $i++) {
    $number = intval(readline());
    if ($number >$max) {
        $max = $number;
    }if($number<$min){
        $min=$number;
    }
}
echo "Max number: $max".PHP_EOL."Min number: $min";
?>
