<?php
function plus($a, $b){
    return $a+$b;
}

echo plus(4,5);
echo "<br>";

echo plus(2, plus(4,6));