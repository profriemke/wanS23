<?php

$hash = password_hash("123", PASSWORD_BCRYPT, ['cost'=>12]);

echo $hash;

if(password_verify("123", $hash)){
    echo "prima";
}else{
    echo "nee";
}