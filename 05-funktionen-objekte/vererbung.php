<?php
class Schreiber {
	function hallo() {
		echo "Hallo";
	}
}
class Freundlich extends Schreiber {
	function tag() {
        echo "Guten Tag";
	}
}

$fr = new Freundlich();

$fr->tag();
$fr->hallo();