<?php

echo "\"Hallo\"";
echo '"Hallo"';
echo "'Hallo'";



// anderes Beispiel
$a="0; DROP TABLE irgendwas;";
$stmt->prepare("SELECT * FROM irgendwas WHERE id=".$a);