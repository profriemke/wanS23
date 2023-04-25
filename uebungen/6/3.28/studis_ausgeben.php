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
        $statement = $pdo->prepare('SELECT * FROM studierende');

        if($statement->execute()){
            //Erfolg
            while($row = $statement->fetch()){
                echo $row['matrikel'].' '.$row['vorname'].' '.$row['nachname'].'<br>';
            }
        }else{
            //Fehler
            echo "Fetter Fehler";
            echo $statement->errorInfo()[2];
            //$error = $statement->errorInfo();
            //echo $error[2];
        }
    ?>

    
</body>
</html>