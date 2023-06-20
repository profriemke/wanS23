<?php
header("Content-Type: application/json; charset=UTF-8");
class Studi {
    var $name;
    var $alter;
    var $studiengang;	
}
$s=new Studi;
$s->name = "John";
$s->alter = 30;
$s->studiengang = "OMM";
$jsn = json_encode($s);
echo $jsn;
?>