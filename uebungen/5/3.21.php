<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Aufgabe</title>
</head>
<body>
    <?php
        $a = array( // Assoziatives Array mit Pfeilzuweisung anlegen
        "Franz"=>"Müller",
        "Susi"=>"See",
        "Karl"=>"Klee",
        "Tara"=>"Tee"
        );
        //Nachnamen von Susi und Tara ausgeben:
        echo $a["Susi"] . "<br>" . $a["Tara"] . "<br>";
        //Eintrag von Tara durch "Kaffee" ersetzen und ausgeben:
        $a["Tara"] = "Kaffee";
        echo $a["Tara"];
    ?>
</body>
</html>