<?php
#ex1 you have an array of numbers. write a script to find minimum and maximum numbers in the array.

$nums = [100,200,300,20,250,450,500,50,1000];
$min = $nums[0];
for($i = 0; $i < count($nums); $i++){
    if ($nums[$i] < $min  ){
       $min = $nums[$i];
    } elseif ($nums[$i] > $min) {
        $max = $nums[$i];
    }
}
echo "the min num is $min and the max is $max";