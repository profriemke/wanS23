<?php
require 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $stmt = $pdo->prepare("SELECT * FROM besch_sektoren WHERE sektor='Gastgewerbe'");
    if(!$stmt->execute()){
        die('Fehler');
    }

    ?>
    <h1>Die Daten</h1>
    <svg width="1000" height="600">
        <?php 
        $posx = 10;
        while($row = $stmt->fetch()){

        ?>

        <rect x="<?php echo $posx;?>" y="<?php echo 600-$row['2009']*0.4;?>" width="150" height="<?php echo $row['2009']*0.4;?>" fill="red"/>
        <text x="<?php echo $posx;?>" y="580" ><?php echo $row["geschlecht"].': '.$row['2009']; ?></text> 
        <?php
        $posx = $posx +200;
        }
        ?>
    </svg>
    
    ende
</body>
</html>