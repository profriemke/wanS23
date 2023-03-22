<?php

$a = array("Man", "Woman", "Camera");

echo $a[2];
var_dump($a);
echo "<br>";
print_r($a);

echo "<br>";

for($i=0; $i<count($a); $i++){
    echo "der $i Eintrag ist:". $a[$i]."<br>";
}
echo "<br>";
foreach($a as $element){
    echo $element."<br>";
}