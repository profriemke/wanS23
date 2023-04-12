<?php
    include "db.php";
$statement = $pdo->prepare("SELECT * FROM namen");

if($statement->execute()) {
    $data = $statement->fetchAll();
    var_dump($data);
}else{
    echo "Datenbank-Fehler";
    echo $statement->errorInfo()[2];
    echo $statement->queryString;
    die();
}