<?php
$moneyforYears = $_POST["invent"] * pow((1 + ($_POST["yearInterset"] / 100)), $_POST["years"]);
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
<div id="content">
    <h1>Future Value Calculator</h1>

    <label>Investment Amount: </label>
    <span>$<?php echo $_POST["invent"]; ?></span> <br/>

    <label>Yearly Interest Rate: </label>
    <span><?php echo $_POST["yearInterset"]; ?>%</span> <br/>

    <label>Number of Years: </label>
    <span><?php echo $_POST["years"]; ?></span> <br/>
    <label>Future Value: </label>
    <span>$<?php echo $moneyforYears ?></span> <br/>
</div>
</body>
</html>