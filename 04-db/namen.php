<?php
    include "db.php";
$statement = $pdo->prepare("SELECT * FROM namen");

if($statement->execute()){
    while($row = $statement->fetch()){
        echo $row["id"].". ".$row["vorname"]." ".$row["nachname"]."<br>";
    }
}else{
    echo "fetter Fehler";

    // $error = $statement->errorInfo();
    // echo $error[2];
    echo $statement->errorInfo()[2];
	echo $statement->queryString;
	die();
}