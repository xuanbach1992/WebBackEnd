<?php
$birthday = null;
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!empty($_GET["birthday"])) {
        $birthday = $_GET["birthday"];
        $date = str_replace('/', '-', $birthday);
        $date = strtotime($date);
//        var_dump($date);
        $dateNow = date("d-M-Y");
        $dateNow = strtotime($dateNow);
//        var_dump($dateNow);
        $time = $dateNow - $date;
        var_dump($time);
        $day = floor($time / 86400);
        $week = floor($day / 7);
        $dayOfWeek = $day - ($week * 7);
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
    <label>
        <input type="text" name="birthday" placeholder="dd/mm/yyyy" value="<?php echo $birthday ?>">
    </label>
    <input type="submit" value="tinh ra ngay">
</form>
<?php
#isset() or !empty
if (!empty($day)) {
    echo "bạn có mặt trên đời này được : " . $day . " ngày <hr>";
    echo "tương đương " . $week . " tuần và " . $dayOfWeek . " ngày";
}
?>
</body>
</html>
