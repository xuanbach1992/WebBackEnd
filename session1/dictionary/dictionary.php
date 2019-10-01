<?php
$dictionary = array("hello" => "xin chao", "how" => "the nao");
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if ($_GET["search"] != "") {
        $searchword = $_GET["search"];
        $flag = 0;
        foreach ($dictionary as $word => $description) {
            if ($word == $searchword) {
                echo $description;
                $flag = 1;
            }
        }
        if ($flag == 0) {
            echo "khong co trong tu dien";
        }
    }
}
?>