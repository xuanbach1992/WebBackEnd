<?php
include_once "User.php";
include_once "Student.php";
include_once "manager/ManagerStudent.php";
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
    if (!empty($_GET["student"])) {
        $role = $_GET["student"];
    }
}
$student_one = new Student($name, $address, $phone, $role, $group);
//var_dump($student_one);
$manager = new ManagerStudent("manager/data.json");
//var_dump($manager);
$manager->addData($student_one);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input {
            border-radius: 10px;
            border: solid 1px #FF0000;
        }
    </style>
</head>
<body>
<form action="" method="get">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name="phone"></td>
        </tr>
        <tr>
            <td>Group</td>
            <td><input type="text" name="group"></td>
        </tr>
        <tr>
            <td><select name="role">
                    <option value="admin">Admin</option>
                    <option value="student" selected>Student</option>
                </select></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" style="text-align: center" value="ADD USER"></td>

        </tr>
    </table>
</form>
</body>
</html>
