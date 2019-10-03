<?php
include "rectangle.php";
$rectangle = new Rectangle(10, 20);
$rectangle->setWidth(30);
$rectangle->setHeight(40);
echo $rectangle->getWidth()."<br>";
echo $rectangle->getHeight()."<br>";
echo $rectangle->getPerimeter() . "<br>";
echo $rectangle->getArea() . "<br>";
echo $rectangle->display() . "<br>";