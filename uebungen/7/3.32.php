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
        for($i=0; $i<=100;$i=$i+2){

            $zahl[$i] = 100-$i;

        }

        for($i=0; $i<=100; $i++){
            echo $i." --> ".$zahl[$i]."<br>";
        }
    ?>
    
</body>
</html>