<?php

$n = intval(readline());
$num = 1;
for ($i = 0; $i <= $n; $i += 2) {
    echo "$num ";
    $num *= 4;
}

?>
