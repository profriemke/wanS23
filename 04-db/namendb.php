<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namen</title>
</head>
<body>
    <h1>Unsere Namen</h1>
    <?php
        include "db.php";
        $statement = $pdo->prepare("SELECT * FROM namen");
        if($statement->execute()){
            //Erfolg
            while($row = $statement->fetch()){
                echo $row["nachname"].", ".$row["vorname"]."<br>";
            }
        }else{
            //Fehler
            echo "Fehler!";
        }
    ?>
    <h2>Neue Mates</h2>
    <form action="namendb_do.php" method="post">
        <input type="text" name="vorname" placeholder="Vorname"><br>
        <input type="text" name="nachname" placeholder="Nachname"><br>
        <input type="submit">
    </form>
    
</body>
</html>