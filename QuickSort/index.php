<?php 
    include('../helpers.php');

    $numbers = [9,100,5,2,4,1,3];

    function quickSort(array $arr){
        if(count($arr) <= 2){
            return $arr;
        }
        $pivot       =   array_shift($arr);
        $left        =   $right  =   [];
        for($i = 0; $i<=count($arr)-1; $i++){
            if($arr[$i] <= $pivot){
                $left[]  =  $arr[$i];
                continue;
            }
            $right[]  =  $arr[$i];
        }

        return array_merge(quickSort($left),array($pivot),quickSort($right));
    }
    $numbers    =   quickSort($numbers);
    printArray($numbers);
