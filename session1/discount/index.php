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
<form action="display_discount.php" method="post">
   <table>
      <tr>
          <td>Product Description</td>
          <td> <input type="text" name="description"></td>
      </tr>
       <tr>
           <td>List Price</td>
           <td> <input type="text"name="price"></td>
       </tr>
       <tr>
           <td> Discount Percent</td>
           <td><input type="text" name="discountPercent"> %</td>
       </tr>
       <tr>
           <td> <input type="submit" value="Caculator Discount"></td>
       </tr>
   </table>
</form>
</body>
</html>