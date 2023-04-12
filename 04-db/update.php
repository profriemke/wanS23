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
        $statement = $pdo->prepare("UPDATE namen SET nachname=? WHERE id=?");
        if($statement->execute(array("Müller",3))){
            echo "Erfolg";
        }else{
            echo "War nix.";
        }
    ?>

    </body>
</html>