<?php

$budget = floatval(readline());
$category = readline();
$peopleCount = intval(readline());
$transport = -1;

if ($peopleCount <= 4) {
    $transport = 0.75;
} else if ($peopleCount <= 9) {
    $transport = 0.6;

} else if ($peopleCount <= 24) {
    $transport = 0.5;
} else if ($peopleCount <= 49) {
    $transport = 0.4;
} else {
    $transport = 0.25;
}
$ticketPrice = 0;
if ($category == "VIP") {
    $ticketPrice = 499.99;
} else {
    $ticketPrice = 249.99;
}
$budget = $budget - ($transport * $budget);
$totalTicketPrice = $peopleCount * $ticketPrice;
if ($budget >= $totalTicketPrice) {
    printf("Yes! You have %.2f leva left.", ($budget - $totalTicketPrice));
} else {
    printf("Not enough money! You need %.2f leva.", ($totalTicketPrice - $budget));
}
