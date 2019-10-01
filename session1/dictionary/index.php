<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
    <title>tu dien</title>
</head>
<body>
<h1>tu dien</h1>
<form method="get" action="">
    <input type="text" placeholder="nhap tu muon tra" name="search">
    <input type="submit" id="submit" value="Search">

</form>
<pre><?php include "dictionary.php"?>
</pre>
</body>
</html>