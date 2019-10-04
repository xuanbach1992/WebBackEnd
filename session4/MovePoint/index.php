<?php
include_once "Point.php";
include_once "MoveablePoint.php";
$movablepoint = new MoveablePoint(2, 4, 8, 16);
var_dump($movablepoint->getY());
$movablepoint->move();
$movablepoint->toString();