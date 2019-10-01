
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
    <title>Hien thi danh sach khach hang</title>
</head>
<body>
    <table border="0">
        <captain><h1>Danh sach khach hang</h1></captain>
        <tr>
            <th>stt</th>
            <th>name</th>
            <th>birthday</th>
            <th>address</th>
            <th>avatar</th>
        </tr>
        <?php include "array.php" ?>
    </table>

</body>
</html>
