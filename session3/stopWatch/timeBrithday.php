<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["birthday"])) {
        $birthday = $_GET["birthday"];
        $date = str_replace('/', '-', $birthday);
        $date = strtotime($date);
        var_dump($date);
        $dateNow = date("Y-M-d");
        $dateNow = strtotime($dateNow);
        var_dump($dateNow);
        $time = $dateNow - $date;
       var_dump($time);
       $day=$time/86400;
       $week=round($time/86400/7);
    }
}
?>
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
<form action="" method="get">
    <input type="text" name="birthday" value="1992/02/05">
    <input type="submit" value="tinh ra ngay">
</form>
<?php //echo "Ngày: " . $day['mday'] . "<hr>"; ?>
</body>
</html>
