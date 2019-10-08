<?php

$id = $_GET['id'];

$data = file_get_contents('data.json');
$data = json_decode($data, true);
    array_splice($data,$id,1);
$data = json_encode($data);
file_put_contents('data.json', $data);
header("Location: list.php");

