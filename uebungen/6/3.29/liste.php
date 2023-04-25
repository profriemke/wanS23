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
        $pdo = new PDO('mysql:: host=localhost; dbname=s23wan', 'root', '123', array('charset'=>'utf8'));
        $stmt = $pdo->prepare('SELECT * FROM buch');

        if($stmt->execute()){
            //Erfolg
            while($row = $stmt->fetch()){
                echo $row['titel'].$row['autor'].$row['verlag'].$row['isbn'].'<br>';
            }
        }else{
            //Fehler
            echo "Fehler";
        }
    ?>
</body>
</html>