<?php
include_once "../User.php";
include_once "../Student.php";
include_once "ManagerStudent.php";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!empty($_GET["name"])) {
        $name = $_GET["name"];
    }
    if (!empty($_GET["address"])) {
        $address = $_GET["address"];
    }
    if (!empty($_GET["phone"])) {
        $phone = $_GET["phone"];
    }
    if (!empty($_GET["group"])) {
        $group = $_GET["group"];
    }
    if (!empty($_GET["role"])) {
        $role = $_GET["role"];
    }
}
$student_one = new Student($name, $address, $phone, $role, $group);

$path = "data.json";
$manager = new ManagerStudent($path);
$manager->addData($student_one);
header("Location: ../index.php");
?>