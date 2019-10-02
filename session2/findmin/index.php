<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tim gia tri lon nhat</title>
</head>
<body>
<?php
$arrayDemo = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 12, 3, 4, 99, 5, 1, -9);
$demoArays = array(
    [1, 2, 3], [4, 5, 6], [1, -3, 6], [1, 9, 0], [-9, 80]
);
function findMaxInArray($arr)
{
    $min = $arr[0];
    foreach ($arr as $val) {
        if ($val > $min) {
            $min = $val;
        }
    }
    return $min;
}

function findMinArrays($arr)
{
    $min = $arr[0][0];
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($min > $arr[$i][$j]) {
                $min = $arr[$i][$j];
            }
        }
    }
    return $min;
}

//echo findMaxInArray($arrayDemo);
echo findMinArrays($demoArays);
?>
</body>
</html>