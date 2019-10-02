<?php include "validate.php" ?>
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
<form action="" method="post">
    <fieldset>
        <legend>thong tin nguoi dung</legend>
        <table>
            <tr>
                <td> Name:</td>
                <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
                <td><span class="error">* <?php echo $nameErr; ?></span></td>
            </tr>
            <tr>
                <td> E-mail</td>
                <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
                <td><span class="error">* <?php echo $emailErr; ?></span></td>
            </tr>
            <tr>
                <td>Website:</td>
                <td><input type="text" name="website" value="<?php echo $website; ?>"></td>
                <td><span class="error"><?php echo $websiteErr; ?></span></td>
            </tr>
            <tr>
                <td> Comment:</td>
                <td><textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea></td>
                <td><span class="error"></span></td>
            </tr>
            <tr>
                <td> Gender:</td>
                <td><input type="radio" name="gender"
                           <?php if (isset($gender) && $gender == "female") echo "checked"; ?>value="female">Female
                    <input type="radio" name="gender"
                           <?php if (isset($gender) && $gender == "male") echo "checked"; ?>value="male">Male
                </td>
                <td><span class="error">* <?php echo $genderErr; ?></span></td>
            </tr>
            <tr>
                <td><input type="submit" value="Update"></td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>