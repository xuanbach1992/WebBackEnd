<?php include "primeNumber.php" ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="get" action="" name="form1">
    <label>kiem tra so nguyen to</label>
    <label>
        <input type="text" name="numberCheck" placeholder="nhập số muốn kiếm tra">
    </label>
    <input type="submit" value="Check">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if ($_GET["numberCheck"] !== " ") {
        if (isPrimeNumber($_GET["numberCheck"])) {
            echo $_GET["numberCheck"] . " la so nguyen to";
        } else {
            echo $_GET["numberCheck"] . " ko phai";
        }
    }
}
?>
<hr>
<form action="" method="get" name="form2">
    <label>in ra danh sach so nguyen to</label>
    <label>
        <input type="text" name="numberCount" placeholder="giới hạn">
    </label>
    <input type="submit" value="Print">
    <?php
    $num = 2;
    $countPrime = 0;
    while ($countPrime < $_GET["numberCount"]) {
        if (isPrimeNumber($num)) {
            $countPrime++;
            echo $num . " ";
        }
        $num++;
    }

//    for ($countPrime = 0; $countPrime < $_GET["numberCount"]; $countPrime++) {
//        if (isPrimeNumber($num)) {
//            echo $num . " ";
//        }
//        $num++;
//    }

    ?>
</form>

</body>
</html>