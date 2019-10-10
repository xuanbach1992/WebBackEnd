<?php
include_once "../User.php";
include_once "../Student.php";
include_once "ManagerStudent.php";

$path = "data.json";
$manager = new ManagerStudent($path);
$id = $_GET['id'];
$manager->delete($id);
header("Location: list.php");

