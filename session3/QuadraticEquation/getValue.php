<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!empty($_GET["num1"])) {
        $demo->setA($_GET["num1"]);
    }
    if (!empty($_GET["num2"])) {
        $demo->setB($_GET["num2"]);
    }
    if (!empty($_GET["num3"])) {
        $demo->setC($_GET["num3"]);
    }
}
