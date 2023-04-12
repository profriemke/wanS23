<?php
    session_start();
    if (!isset($_SESSION["login"])){
        die("Du kommst hier nicht rein!");
    }
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
    Hallo <?php echo $_SESSION["firstname"];?><br>
    Dies ist die geheime Seite!
</body>
</html>