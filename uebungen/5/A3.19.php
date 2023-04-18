<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>nummerierung</th>
            <th>name</th>
        </thead>
        <tbody>
            <?php
                $names = array("Aliya","Clara","Ingrid","Linda","Maria","Nathalie","Nico","Nils","Salah","Vinc");
                foreach($names as $key=>$element){
                    echo "<tr>";
                    echo "<td>$key</td>";
                    echo "<td>$element</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>