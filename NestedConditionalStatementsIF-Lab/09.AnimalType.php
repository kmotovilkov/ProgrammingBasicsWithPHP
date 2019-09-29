<?php

$animal = strtolower(readline());
switch ($animal) {
    case "dog":
        echo "mammal";
        break;
    case "crocodile":
    case "tortoise":
    case "snake":
        echo "reptile";
        break;
    default :
        echo "unknown";
}
   

