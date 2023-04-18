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
        $name = array("Hans","Susi", "Michael", "Hannah", "Andi", "Kathi", "Louis", "Anna", "Noah", "Sebastian"); //Array anlegen
        for ($i = 0; $i < count($name); $i++) { //for-Schleife anlegen
            echo $name[$i]; //ausgeben der Elemente des Arrays
            echo "<br>";
        }
    ?>
</body>
</html>