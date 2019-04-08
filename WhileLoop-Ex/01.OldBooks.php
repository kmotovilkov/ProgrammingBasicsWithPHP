<?php

$book = readline();
$capacity = intval(readline());
$count = -1;
while (true) {
    $curentBook = readline();
    $count++;
    if ($curentBook == $book) {
        printf("You checked %d books and found it.", $count);
        break;
    } else if ($capacity == $count) {
        echo "The book you search is not here!" . PHP_EOL;
        printf("You checked %d books.", $count);
        break;
    }
}
?>
