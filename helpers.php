<?php

    /*
     * swap array items
     *
     * @param   int $i
     * @param   int $j
     * @param   array $numbers
     *
     * @return  array $numbers
    */
    function swap(int $i, int $j, array $numbers) :array
    {
        echo $numbers[$j] .' < '. $numbers[$i] . "\n";
        $temp                   =   $numbers[$i];
        $numbers[$i]            =   $numbers[$j];
        $numbers[$j]            =   $temp;
        return $numbers;
    }

    /*
     * print array elements
     *
     * @param   array $numbers
    */
    function printArray(array $numbers) 
    {
        foreach($numbers as $number){
            echo $number . ' , ';
        }
        echo "\n";
    }