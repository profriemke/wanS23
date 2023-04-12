<?php
    session_start();
?>
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
        include "db.php";

        $statement = $pdo->prepare("SELECT * FROM user WHERE login=? AND password=?");
        if(!$statement->execute(array($_POST["login"], $_POST["password"]))){
            die("Datenbank-Fehler!");
        }
        if($row = $statement->fetch()){
            echo "angemeldet";
            $_SESSION["login"] = $row["login"];
            $_SESSION["firstname"] = $row["firstname"];
        }else{
            echo "nicht angemeldet";
        }

?>
    
</body>
</html>