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
        
        //var_dump($_FILES["bild"]);
        //var_dump($_POST["description"]);
        if(isset($_FILES["bild"]) && isset($_POST["description"])){
            echo pathinfo($_FILES["bild"]["name"],PATHINFO_EXTENSION);
            $stmt = $pdo->prepare('INSERT INTO bilder (extension, description) VALUES (?,?)');
            if($stmt->execute(array(pathinfo($_FILES["bild"]["name"],PATHINFO_EXTENSION), $_POST["description"]))){
                move_uploaded_file($_FILES["bild"]["tmp_name"],"/var/www/html/wanS23/14-bilddatenbank/bilder/".$pdo->lastInsertId().'.'.pathinfo($_FILES["bild"]["name"],PATHINFO_EXTENSION));
                echo "hinzugefügt";
            }else{
                echo "Fehler bei Upload";
            }
        }

        $stmt = $pdo->prepare('SELECT * FROM bilder');
        if($stmt->execute()){
            //erfolg
            while($bild = $stmt->fetch()){
                echo '<img src="bilder/'.$bild["id"].'.'.$bild["extension"].'" height="100">';
                echo '<br>'.$bild["description"]."<br>";
                echo '<a href="edit.php?id='.$bild['id'].'">Edit</a><br>';
            }
            
        }else{
            echo "DB-Fehler";
        }
    ?>
    <form action="./index.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="bild"><br>
        <input type="text" name="description"><br>
        <input type="submit">
    </form>
    
</body>
</html>