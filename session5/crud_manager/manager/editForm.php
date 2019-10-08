<?php
include "loadData.php";
$index = $_GET["id"];
var_dump($arrayPrint[$index]);
//if (!empty($_GET['update'])) {
    $arrayPrint[$index] = array(
        'name' => $_GET['name'],
        'address' => $_GET['address'],
        'phone' => $_GET['phone'],
        'group' => $_GET['group'],
        'role' => $_GET['role']
    );
    echo "<br>";
var_dump($arrayPrint[$index]);
//}
$data = json_encode($arrayPrint);
file_put_contents('data.json', $data);
header("Location: list.php");
