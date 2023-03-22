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
        if(!isset($_GET["vorname"]) or !isset($_GET["nachname"])){
            die("Was machst Du da?");
        }
        echo $_GET["vorname"]." ".$_GET["nachname"];
    ?>
</body>
</html>