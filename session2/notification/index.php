<?php
function calc($x, $y)
{
    $tong = $x + $y;
    $hieu = $x - $y;
    $nhan = $x * $y;
    echo "$x + $y = $tong";
    echo "<br>";
    echo "$x - $y = $hieu";
    echo "<br>";
    echo "$x * $y = $nhan";
    echo "<br>";
    try {
        if ($y == 0) {
            throw new Exception("phep chia cho 0 khong xay ra Math error ");
        }
        echo $x / $y;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

calc(9, 0);
?>