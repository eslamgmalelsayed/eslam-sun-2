<?php
#ex3 write a script to display this shape:

for($i = 1; $i <=5 ; $i++){
    for($j = 1; $j <= $i; $j++){
        echo "*";
    }
    echo "<br>";
}
for($i = 5; $i >= 1; $i--){
    for($j = 0; $j < $i; $j++){
        echo "*";
    }
    echo "<br>";
}