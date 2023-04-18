<?php
if(!isset($_POST["password"]) OR !isset($_POST["login"])){
    header("Location: login.php");
}
session_start();
include "db.php";
$statement = $pdo->prepare("SELECT * FROM user WHERE login=?");
if($statement->execute(array($_POST["login"]))){
    if($row = $statement->fetch()){
        // angemeldet
        if(password_verify($_POST["password"], $row["password"])){
            echo "Willkommen!";
            $_SESSION["login"] = $row["login"];
        }else{
            //nicht angemeldet
             header("Location: login.php");
        }
    }else{
        //nicht angemeldet
        header("Location: login.php");
    }
}else{
    echo "Datenbänkle hat Fehler";
}