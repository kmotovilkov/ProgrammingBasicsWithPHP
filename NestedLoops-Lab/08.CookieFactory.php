<?php

$numberOfBatches = intval(readline());
$flour = FALSE;
$sugar = FALSE;
$eggs = FALSE;
for ($i = 1; $i <= $numberOfBatches; $i++) {
    while (true) {
        $command = readline();
        if ($command == "Bake!") {
            if ($flour == TRUE && $eggs == TRUE && $sugar == TRUE) {
                echo "Baking batch number $i..." . PHP_EOL;
                $flour = FALSE;
                $eggs = FALSE;
                $sugar = FALSE;
                break;
            } else {
                echo "The batter should contain flour, eggs and sugar!" . PHP_EOL;
                continue;
            }
        }
        switch ($command) {
            case "flour":
                $flour = TRUE;
                break;
            case "eggs":
                $eggs = TRUE;
                break;
            case "sugar":
                $sugar = TRUE;
                break;
        }
    }
}

?>
