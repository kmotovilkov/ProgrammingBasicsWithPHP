<?php
$num= readline();
$lenght= strlen($num);

for($i=$lenght-1;$i>=0;$i--){
    $current= $num[$i];
    for($j=1;$j<=$current;$j++){
        $symbol= chr($current+33);
        echo $symbol;
    }
    if($current==0){
        echo "ZERO".PHP_EOL;
        continue;
    }
    echo PHP_EOL;
}
?>
