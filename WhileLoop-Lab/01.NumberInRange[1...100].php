<?php

$num = intval(readline());
while ($num > 1 || $num < 100) {
    echo "$num";
    $num = intval(readline());
}
echo "Invalid number!";


