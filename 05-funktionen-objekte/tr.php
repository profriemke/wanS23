<?php

class Taschenrechner {
    private $speicher = 0;
    function ergebnis(){
        return $this->speicher;
    }
    function add($a){
        $this->speicher += $a;
    }
    function sub($a){
        $this->speicher -= $a; 
    }
}

$t = new Taschenrechner();
$t2 = new Taschenrechner();
$t2->add(504);
$t->add(25);
$t->add(7);
$t->sub(7);
echo $t->ergebnis();
echo $t2->ergebnis();
// nein: echo $t->speicher;