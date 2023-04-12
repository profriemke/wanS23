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
    $statement = $pdo->prepare("INSERT INTO namen (vorname, nachname) VALUES (?,?)");
    if($statement->execute(array("Frauke", "Farn"))){
        echo "hat prima geklappt: Id: ".$pdo->lastInsertId();
    }else{
        echo "war nix, Fehler!";
    }
    ?>
</body>
</html>