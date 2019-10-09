<?php
include_once "ManagerStudent.php";
$id = $_GET["id"];
$manager->edit($id);
header("Location: list.php");
