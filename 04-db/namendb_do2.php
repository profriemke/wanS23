<?php
        if(!isset($_POST["vorname"]) OR !isset($_POST["nachname"])){
            die("Formular-Fehler!");
        }
        include "db.php";

        $statement = $pdo->prepare("INSERT namen (vorname, nachname) VALUES (?, ?) ");

        if($statement->execute(array($_POST["vorname"],$_POST["nachname"] ))){
            //alles gut
          header("Location: namendb.php");
        }else{
            //nichts gut
            echo "da war nix";
        }
    ?>
