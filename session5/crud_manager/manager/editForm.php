<?php
include_once "../User.php";
include_once "../Student.php";
include_once "ManagerStudent.php";

$path = "data.json";
$manager = new ManagerStudent($path);
$id = $_GET["id"];
$arr=new Student($_GET["name"],$_GET["address"],$_GET["phone"],$_GET["role"],$_GET["group"]);
$manager->edit($id,$arr);
header("Location: list.php");
