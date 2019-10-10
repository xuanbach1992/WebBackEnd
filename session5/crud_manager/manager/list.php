<?php
include_once "../User.php";
include_once "../Student.php";
include_once "ManagerStudent.php";

$path = "data.json";
$manager = new ManagerStudent($path);
$arrayPrint = $manager->getListStudentData();

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
        table {
            border: solid 1px blue;
        }

        tr, td {
            border: 1px solid black;
            width: 200px;
            height: 100px;
            text-align: center;
        }
    </style>
</head>
<body>
<form action="" method="get">
    <table>
        <tr>
            <td>STT</td>
            <td>Name</td>
            <td>Phone</td>
            <td>Address</td>
            <td>Class</td>
            <td>Role</td>
        </tr>
        <?php
        foreach ($arrayPrint as $key => $item) {
            ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $item->name ?></td>
                <td><?php echo $item->address ?></td>
                <td><?php echo $item->phone ?></td>
                <td><?php echo $item->group ?></td>
                <td><?php echo $item->role ?></td>
                <td><a href="edit.php?id=<?php echo $key ?>">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $key ?>" onClick="return confirm('Delete user?')">Delete</a></td>
            </tr>
            <?php
        } ?>
    </table>
</form>
<a href="../index.php">Back</a>

</body>

</html>
