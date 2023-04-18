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
        if(!isset($_POST["firstname"]) OR !isset($_POST["lastname"]) OR !isset($_POST["login"]) OR !isset($_POST["password"])){
            die("Formular-Fehler!");
        }
        include 'db.php';
        $statement = $pdo->prepare('INSERT INTO user (firstname, lastname, login, password) VALUES (?,?,?,?)');
       if($statement->execute(array(htmlspecialchars($_POST['firstname']), htmlspecialchars($_POST['lastname']), htmlspecialchars($_POST['login']), password_hash($_POST['password'], PASSWORD_BCRYPT,['cost'=>12])))){
             echo "Registrierung erfolgreich!";
       }else{
         echo "Fehler!";
       }
    ?>
</body>
</html>