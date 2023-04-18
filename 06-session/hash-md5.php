<?php

$hash = md5("123");
$password = "123";
echo $hash;

if($hash == md5($password)){
    echo "willkommen!";
}else{
    echo "nee";
}

