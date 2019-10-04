<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ve Tam giac trong ma tran vuong</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="width" placeholder="width" value="<?php echo $width ?>">
    <input type="text" name="height" placeholder="height" value="<?php echo $height ?>">
    <input type="submit" value="Draw"><br>
    <code>
        <?php
        $countElement2 = 0;
        $draw_1 = "a&nbsp";
        $draw_2 = "*&nbsp";
        $countElement2 = 0;
        $width = $_POST['width'];
        $height = $_POST['height'];
        for ($i = 0; $i < $height; $i++) {
            array_push($arrNumber, $i);
            $arrNumber[$i] = [];
            for ($j = 0; $j < $width; $j++) {
                array_push($arrNumber[$i], $j);
                $arrNumber[$i][$j] = $draw_1;
                if (($i + $j < $height-1) || (($i + $j > ($width-1) && $i + $j < ($height * 2-1)) && $i != ($height-1) && $j != ($width-1))) {
                    $countElement2 = $j;
                    $arrNumber[$i][$j] = $draw_2;
                }
                echo $arrNumber[$i][$j];
            }
            echo "<br>";
        }
        ?>
    </code>
</form>
</body>
</html>
