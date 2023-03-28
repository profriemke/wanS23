<?php
$pdo=new PDO('mysql:: host=localhost; dbname=s23wan', 'root', '123', array('charset'=>'utf8'));

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