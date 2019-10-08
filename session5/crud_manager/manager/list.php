<?php
include "loadData.php";
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
        table, tr, td {
            border: 1px solid black;
            width: 50%;
            text-align: center;
        }
    </style>
</head>
<body>
<form action="" method="get">
    <table>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Phone</td>
            <td>Address</td>
            <td>Class</td>
            <td>Role</td>
        </tr>
        <?php
        for ($i = 0; $i < count($arrayPrint); $i++) {
            ?>
            <tr>
                <td><?php echo $i+1 ?></td>
                <td><?php echo $arrayPrint[$i]["name"] ?></td>
                <td><?php echo $arrayPrint[$i]["address"] ?></td>
                <td><?php echo $arrayPrint[$i]["phone"] ?></td>
                <td><?php echo $arrayPrint[$i]["group"] ?></td>
                <td><?php echo $arrayPrint[$i]["role"] ?></td>
                <td><a href="edit.php?id=<?php echo $i ?>">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $i ?>" onClick="return confirm('Delete user?')">Delete</a></td>
            </tr>
            <?php
        } ?>
    </table>
</form>
<a href="../index.php">Back</a>

</body>

</html>
