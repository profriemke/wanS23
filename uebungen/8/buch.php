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
    if(isset($_SESSION['login'])){
            require "db.php";
            $stmt = $pdo->prepare('SELECT * FROM buch');
            if($stmt->execute()){
                //Erfolg
                while($row = $stmt->fetch()){
                    echo $row['titel'].' '.$row['autor'].' '.$row['verlag'].'<br>';
                }
            ?>
                    <a href="buch_logout.php"><button>ausloggen</button></a>
            <?php
            }else{
                //Fehler
                echo "Fehler";
            }

    }else{
        echo "Du bist nicht angemeldet!";
    }
    ?>
</body>
</html>