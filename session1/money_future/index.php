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
<table>
    <form action="content.php" method="post">
        <tr>
            <td>Inventment Amount</td>
            <td><input type="text" name="invent" placeholder="tiền đầu tư ban đầu"></td>
        </tr>
        <tr>
            <td>Yearly Interest Rate</td>
            <td><input type="text" name="yearInterset" placeholder="Lãi suất năm"></td>
        </tr>
        <tr>
            <td>Number of Years</td>
            <td><input type="text" name="years" placeholder="Số năm đầu tư"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Caculator"></td>
        </tr>
    </form>
</table>
</body>
</html>