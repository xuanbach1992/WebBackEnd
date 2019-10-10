<?php
include_once "../User.php";
include_once "../Student.php";
include_once "ManagerStudent.php";

$path = "data.json";
$manager = new ManagerStudent($path);
$id = $_GET['id'];
$listStudent = $manager->getDataToIndex($id);

$name = $listStudent->getName();
$address = $listStudent->getAddress();
$phone = $listStudent->getPhone();
$group = $listStudent->getGroup();
$role = $listStudent->getRole();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="editForm.php" method="get">
    <table>
        <tr>
            <td>ID</td>
            <td><input type="text" name="id" value="<?php echo $id ?>" readonly="readonly"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?php echo $name ?>"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address" value="<?php echo $address ?>"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name="phone" value="<?php echo $phone ?>"></td>
        </tr>
        <tr>
            <td>Group</td>
            <td><input type="text" name="group" value="<?php echo $group ?>"></td>
        </tr>
        <tr>
            <td><select name="role">
                    <option value="admin">Admin</option>
                    <option value="student" <?php $role == "student" ? "selected" : " " ?>>Student</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" style="text-align: center" value="update"></td>

        </tr>
    </table>
</form>
</body>
</html>
