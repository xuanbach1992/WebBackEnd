<?php
include_once "Shape.php";
include_once "Square.php";
include_once "Rectangle.php";
include_once "Cicrle.php";
$circle = new Cicrle("Cicrle", 10);
$circle->resize(5);
echo $circle->get_Area();