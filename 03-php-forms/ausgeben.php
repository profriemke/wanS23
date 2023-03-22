<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hallo, <br>
    <?php
        if(!isset($_POST["vorname"]) or !isset($_POST["nachname"])){
            die("Was machst Du da?");
        }
        echo htmlspecialchars($_POST["vorname"])." ".htmlspecialchars($_POST["nachname"]);
    ?>
</body>
</html>