<?php
include "QuadraticEquation.php";

$demo = new QuadraticEquation(1, 4, 1);
include "getValue.php";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .formInput input {
            width: 30px;
        }
    </style>
    <title>Document</title>
</head>
<body>
<form action="" method="get" class="formInput">
    <input type="text" name="num1" placeholder="a" value="<?php echo $demo->getA(); ?>">x2+
    <input type="text" name="num2" placeholder="b" value="<?php echo $demo->getB(); ?>">x+
    <input type="text" name="num3" placeholder="c" value="<?php echo $demo->getC(); ?>">=0
    <br><input type="submit" value="tim nghiem" style="width: 100px">
</form>
<?php echo $demo->result(); ?>
</body>
</html>
