<?php
include_once "ComparableCircle.php";

$circleOne = new ComparableCircle('circleOne', 80);
$circleTwo = new ComparableCircle('circleTwo', 12);

var_dump($circleOne->compareTo($circleTwo));