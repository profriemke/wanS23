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
    $vorname = "Gustav";
    $nachname = "Gänseblümchen";

    $statement = $pdo->prepare("INSERT INTO namen (vorname, nachname) VALUES (:vorname,:nachname)");
    $statement->bindParam(":vorname", $vorname);
    $statement->bindParam(":nachname", $nachname);
    if($statement->execute()){
        echo "Erfolg";
    }else{
        echo "Nich so";
    }
    ?>
</body>
</html>