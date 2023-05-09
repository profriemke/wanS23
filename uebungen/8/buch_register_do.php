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
        require 'db.php';
        if(empty($_POST['vorname']) || empty($_POST['nachname']) || empty($_POST['login']) || empty ($_POST['password'])){
            die('Formular fehlerhaft');
        }
        $stmt = $pdo->prepare('INSERT INTO buch_user (login, password, vorname, nachname) VALUES (?, ?, ?, ?)');
        
        if($stmt->execute(array($_POST['login'], password_hash($_POST['password'], PASSWORD_BCRYPT), $_POST['vorname'], $_POST['nachname']))){
            //Erfolg
            echo "Danke, willkommen, leg los!";
        }else {
            //Fehler
            echo "Ging schief";
        }
    ?>


</body>
</html>