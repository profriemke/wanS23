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
        $stmt = $pdo->prepare("INSERT INTO buch (titel, autor, verlag, jahr, isbn) VALUES ('Land der Maulwürfe', 'Darth Maul', 'Unterirdisch', 1172, 0815)");

    ?>
</body>
</html>