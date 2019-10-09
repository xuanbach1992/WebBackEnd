<?php
include_once "ManagerStudent.php";
$id = $_GET['id'];
$manager->delete($id);
header("Location: list.php");

