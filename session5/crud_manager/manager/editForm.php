<?php
include_once "ManagerStudent.php";

$path = "data.json";
$manager = new ManagerStudent($path);
$id = $_GET["id"];
$manager->edit($id);
header("Location: list.php");
