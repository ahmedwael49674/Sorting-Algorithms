<?php 

$numbers = [9,100,5,2,4,1,3];

for($i = 0; $i < count($numbers) - 1; $i++){
    for($j = count($numbers)-1; $j > $i+1; $j--){
        if($numbers[$j] < $numbers[$i]){
            // echo $numbers[$j] .' < '. $numbers[$i] . "\n";
            $temp                   =   $numbers[$i];
            $numbers[$i]            =   $numbers[$j];
            $numbers[$j]            =   $temp;
        }
    }
    foreach($numbers as $number){
        echo $number . ' , ';
    }
    echo "\n";
}