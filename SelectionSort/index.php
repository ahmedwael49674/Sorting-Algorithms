<?php 

$numbers = [9,100,5,2,4,1,3];

for($i = 0; $i < count($numbers) - 1; $i++){
    $minIndex = $i;
    for($j = $i+1; $j < count($numbers); $j++){
        if($numbers[$j] < $numbers[$minIndex]){
            // echo $numbers[$j] .' < '. $numbers[$minIndex] . "\n";
            $minIndex = $j;
        }
    }
    echo 'min value '. $numbers[$minIndex] . "\n";
    if($i != $minIndex){
        $temp                   =   $numbers[$i];
        $numbers[$i]            =   $numbers[$minIndex];
        $numbers[$minIndex]     =   $temp;
    }

    foreach($numbers as $number){
        echo $number . ' , ';
    }
    echo "\n";
}