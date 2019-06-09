<?php 
include('../helpers.php');

$numbers = [9,100,5,2,4,1,3];

for($i = 0; $i < count($numbers)-1; $i++){
    for($j = count($numbers)-1; $j > $i+1; $j--){
        if($numbers[$j] < $numbers[$i]){
            $numbers  = swap($i, $j, $numbers);
        } 
    }
    printArray($numbers);
}