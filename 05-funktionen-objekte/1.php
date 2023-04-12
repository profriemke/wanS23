<?php

function printMehrmals($string, $count){
    for($i=0; $i<=$count; $i++){
        echo $string."<br>";
    }
}

printMehrmals("Hallo", 1000);