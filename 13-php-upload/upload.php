<?php
//var_dump($_FILES["bild"]);
if(!isset($_FILES["bild"])){
    die("kein Bild, kein Upload.");
}
//var_dump($_FILES["bild"]["tmp_name"]);
if($_FILES["bild"]["size"]>400000){
    die("Bild zu groß");
}
if(pathinfo($_FILES["bild"]["name"], PATHINFO_EXTENSION) != "jpg"){
    die("nix anderes als jpg");
}
if(move_uploaded_file($_FILES["bild"]["tmp_name"], "/var/www/html/wanS23/13-php-upload/bilder/".$_FILES["bild"]["name"])){
    //erfolg
    echo "erfolgreich hochgeladen";
}else{
    //fehler
    echo "nicht hochgeladen.";
}
