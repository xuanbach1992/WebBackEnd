<?php
include_once "Point2D.php";
include_once "Point3D.php";
$diem2d = new Point2D(10, 20);
$diem2d->setXY(30, 40);
$diem2d->setX(60);
print_r($diem2d->getXY());
echo "</br>";
echo $diem2d->toString() . "<br>";
$diem3d = new Point3D(10, 20, 30);
$diem3d->setXYZ(100, 200, 500);
echo "</br>";
print_r($diem3d->getXYZ());
echo "</br>";
echo $diem3d->toString();
