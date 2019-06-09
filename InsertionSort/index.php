<?php 
    include('../helpers.php');

    $numbers = [9,100,5,2,4,1,3];

    for($i=0; $i<count($numbers); $i++){
        $value = $numbers[$i];
        for($j = $i-1; $j>=0 && $numbers[$j] > $value; $j--){
            $numbers[$j+1] = $numbers[$j];
        }

        $numbers[$j+1] = $value;
        printArray($numbers);
    }
