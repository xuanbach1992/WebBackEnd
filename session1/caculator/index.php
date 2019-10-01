<?php
function caculator()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        switch ($_POST["operator"]) {
            case "cong":
                $result = $num1 + $num2;
                break;
            case "tru":
                $result = $num1 - $num2;
                break;
            case "nhan":
                $result = $num1 * $num2;
                break;
            case "chia":
                if ($num2 !== 0) {
                    $result = $num1 / $num2;
                    break;
                }else{
                    echo "loi";
                }
        }
    }
    return $result;
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
<h1>may tinh don gian</h1>
<form action="" method="post">
    so thu 1: <label>
        <input type="text" name="num1">
    </label><br>
    so thu 2: <label>
        <input type="text" name="num2">
    </label><br>
    <input type="submit" value="cong" name="operator">
    <input type="submit" value="tru" name="operator">
    <input type="submit" value="nhan" name="operator">
    <input type="submit" value="chia" name="operator">
</form>
<?php echo "ket qua la " . caculator(); ?>
</body>
</html>