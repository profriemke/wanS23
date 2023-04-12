<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(!isset($_POST["vorname"]) OR !isset($_POST["nachname"])){
            die("Formular-Fehler!");
        }
        echo $_POST["vorname"];
        echo $_POST["nachname"];
        include "db.php";

        $statement = $pdo->prepare("INSERT namen (vorname, nachname) VALUES (?, ?) ");

        if($statement->execute(array($_POST["vorname"],$_POST["nachname"] ))){
            //alles gut
            echo "alles gut";
        }else{
            //nichts gut
            echo "da war nix";
        }
    ?>
    <a href="namendb.php">zurück zum Start</a>
</body>
</html>