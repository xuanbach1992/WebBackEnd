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
    <tr>
        <td>Product Discount Calculator</td>
    </tr>
    <tr>
        <td>Product Description:</td>
        <td><?php echo $_POST["description"]; ?></td>
    </tr>
    <tr>
        <td>Price:</td>
        <td><?php echo "$" . $_POST["price"]; ?></td>
    </tr>
    <tr>
        <td>Discount Percent:</td>
        <td><?php echo $_POST["discountPercent"]; ?></td>
    </tr>
    <tr>
        <td>Discount Amount:</td>
        <td><?php echo "$" . $_POST["discountPercent"] * $_POST["price"] / 100; ?></td>
    </tr>
    <tr>
        <td>Discount Price:</td>
        <td><?php
            echo "$" . $_POST["price"] - ($_POST["discountPercent"] * $_POST["price"] / 100);
            ?>
        </td>
    </tr>
</table>
</body>
</html>
