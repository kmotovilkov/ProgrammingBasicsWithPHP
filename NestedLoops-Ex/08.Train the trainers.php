<?php

$numberOfPeople= intval(readline());
$allScore=0;
$counter=0;

while(TRUE){
    $nameOfPresentation= readline();
    $sumOfGrades=0;
    if($nameOfPresentation=="Finish"){
        $scoreSum=$allScore/$counter;
        printf("Student's final assessment is %.2f." . PHP_EOL,$scoreSum);
        break;
    }
    for($i=0;$i<$numberOfPeople;$i++){
        $grade= floatval(readline());
        $sumOfGrades+=$grade;
        $allScore+=$grade;
        $counter++;
    }
    $sumAfter=$sumOfGrades/$numberOfPeople;
    printf("$nameOfPresentation - %.2f." . PHP_EOL, $sumAfter);
            
}
?>
