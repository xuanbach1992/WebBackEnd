<?php
function loadData($path)
{
    $data = file_get_contents($path);
    return json_decode($data, true);
}
$arrayPrint = loadData("data.json");
