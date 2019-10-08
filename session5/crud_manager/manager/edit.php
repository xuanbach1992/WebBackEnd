<?php
include "loadData.php";
$index = $_GET["id"];
$arr = $arrayPrint[$index];

for ($i = 0; $i < count($arrayPrint); $i++) {
    if ($index == $i) {
        $name = $arrayPrint[$i]["name"];
        $address = $arrayPrint[$i]["address"];
        $phone = $arrayPrint[$i]["phone"];
        $group = $arrayPrint[$i]["group"];
    }
}
if (!empty($_POST['update'])) {
    $input = array(
        'name' => $_POST['name'],
        'address' => $_POST['address'],
        'phone' => $_POST['phone'],
        'group' => $_POST['group'],
        'role' => $_POST['role']
    );
    $arrayPrint[$index]=$input;
}

$data = json_encode($arrayPrint);
file_put_contents('data.json', $data);

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
<form action="" method="post">
    <table>
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
                    <option value="student" selected>Student</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" style="text-align: center" value="update">Update</td>

        </tr>
    </table>
</form>
</body>
</html>
