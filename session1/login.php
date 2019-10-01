<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "admin" && $password === "123456") {
        header("location: index.php");
    }
    else{
        echo "user : $username va pass: $password";
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
    <title>Log in</title>
</head>
<body>
<form method="post">
    <input type="text" name="username" placeholder="User"><br>
    <input type="password" placeholder="password" name="password">
    <button type="submit"> log in</button>
</form>
</body>
</html>
