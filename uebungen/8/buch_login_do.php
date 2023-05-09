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
        if(empty($_POST['login'] || empty($_POST['password']))){
            die('irgendwas komisch');
        }
        require 'db.php';

        $stmt = $pdo->prepare('SELECT * FROM buch_user WHERE login=?');
        if($stmt->execute(array($_POST['login']))){
            //erfolg
            if( $user = $stmt->fetch()){
                if(password_verify($_POST['password'], $user['password'])){
                    //Password richtig
                    echo "Herzlich Willkommen ".$user['vorname'];
                    $_SESSION['login'] = $user['login'];
                    $_SESSION['vorname'] = $user['vorname'];
                    $_SESSION['nachname'] = $user['nachname'];

                }else{
                    //password falsch
                    echo ("Passwort falsch");
                }
            }else{
                echo "Nutzer unbekannt";
            }
        }else{
            //Fehler
            echo "Datenbank-Fehler";
        }

    ?>
</body>
</html>