<?php
#ex5 write a script that removes any duplicates from an array.

$nums = [10,30,60,'ahmed','ahmed',10];
$newNums = [];
for($i = 1; $i <=6; $i++){
    if( $nums[$i] == $newNums){
         $newNums= $nums[$i];
    }
}
echo $newNums;