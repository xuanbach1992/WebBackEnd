<?php
include_once "InterComparable.php";
$cicrleOne = new alpha("Cicrle One",10);
$cicrleTwo = new alpha("Cicrle One",2);
var_dump($cicrleOne->Sort($cicrleTwo));
?>