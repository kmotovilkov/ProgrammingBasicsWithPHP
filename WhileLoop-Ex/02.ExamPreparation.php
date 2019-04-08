<?php

$poorGradeLimit = intval(readline());
$poorGradeCount = 0;
$problemCount = 0;
$gradesSum = 0;
$lastProblemName = "";
$problemName = "";
$grade = 0;

while (true) {
    $problemName = readline();
    if ($problemName == "Enough") {
        break;
    }
    $grade = floatval(readline());
    $gradesSum += $grade;
    $lastProblemName = $problemName;
    $problemCount++;

    if ($grade <= 4) {
        $poorGradeCount++;
        if ($poorGradeCount >= $poorGradeLimit) {
            break;
        }
    }
}
if ($poorGradeCount < $poorGradeLimit) {
    printf("Average score: %.2f", $gradesSum / $problemCount);
    echo  PHP_EOL;
    echo "Number of problems: $problemCount" . PHP_EOL;
    printf("Last problem: %s", $lastProblemName . PHP_EOL);
}else{
    printf("You need a break, %d poor grades.", $poorGradeCount) . PHP_EOL;
}
?>
