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
        if(isset($_GET['id'])){
            require 'db.php';
            $stmt = $pdo->prepare('SELECT * FROM bilder WHERE id=?');
            if($stmt->execute(array($_GET['id']))){
                //Erfolg
                if($bild = $stmt->fetch()){
                    //Erfolg
                    ?>
                        <form action="edit_do.php" method="POST">
                        <input type="text" name="description" value="<?=$bild['description']?>"><br>
                        <input type="hidden" name="id" value="<?=$bild['id']?>">
                        <input type="submit" value="Ändern">
                        </form>
                    <?php
                }else{
                    echo "nicht ǵefunden";
                }
            }else{
                echo 'Datenbank-Fehler';
            }

        }
    ?>
    
</body>
</html>