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
    if(isset($_POST['description']) && isset($_POST['id'])){
        require 'db.php';
        $stmt = $pdo->prepare('UPDATE bilder SET description=? WHERE id=?'); 
        if($stmt->execute(array(htmlspecialchars($_POST['description']), $_POST['id']))){
            echo "Änderung gemacht!";
        }else{
            echo 'Änderung fehlgeschlagen';
        }
    }else{
        echo 'Formular-Fehler!';
    }

    ?>
    <a href="index.php">Zur Startseite</a>
</body>
</html>