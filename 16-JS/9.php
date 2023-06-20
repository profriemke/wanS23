<?php
include 'db.php';

$stmt = $pdo->prepare('SELECT * FROM buch');
if($stmt->execute()){
    $buecher = $stmt->fetchAll(PDO::FETCH_ASSOC);
    header("Content-Type: application/json");
    echo json_encode($buecher, JSON_UNESCAPED_UNICODE);
}else{
    echo "schiefgelaufen";
}
