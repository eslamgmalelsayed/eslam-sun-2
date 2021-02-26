<?php
#ex7 trace the code & discuss of each statement of value of x and y

$x = 3 ;
$y=$x++;
$y+= ++$x;
 
if ($y == 7) {
     $x++;
     echo $x ."<br>";
 }
else if ($y == 8){
     $x--;
     echo $x ."<br>";
    }
else if ($y == 9) {
    $x+=2;
    echo $x ."<br>";
}
else { 
    $x= 0;
    echo $x ."<br>";
}