<?php
$pdo=new PDO('mysql:: host=localhost; dbname=s23wan', 'root', '123', array('charset'=>'utf8'));

$statement = $pdo->prepare("SELECT * FROM namen");

if($statement->execute()){
    while($row = $statement->fetch()){
        echo $row["vorname"]." ".$row["nachname"]."<br>";
    }
}else{
    echo "fetter Fehler";

    // $error = $statement->errorInfo();
    // echo $error[2];
    echo $statement->errorInfo()[2];
	echo $statement->queryString;
	die();
}