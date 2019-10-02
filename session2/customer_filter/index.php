<?php
$customer_list = array(
    "0" => array("name" => "Mai Văn Hoàn", "day_of_birth" => "1983/01/20", "address" => "Hà Nội", "image" => "images/img1.jpg"),
    "1" => array("name" => "Nguyễn Văn Nam", "day_of_birth" => "1983/02/21", "address" => "Bắc Giang", "image" => "images/img2.jpg"),
    "2" => array("name" => "Nguyễn Thái Hòa", "day_of_birth" => "1983/03/22", "address" => "Nam Định", "image" => "images/img3.jpg"),
    "3" => array("name" => "Trần Đăng Khoa", "day_of_birth" => "1983/04/17", "address" => "Hà Tây", "image" => "images/img4.jpg"),
    "4" => array("name" => "Nguyễn Đình Thi", "day_of_birth" => "1983/05/19", "address" => "Hà Nội", "image" => "images/img5.jpg")
);

function searchByDate($customer, $fromDate, $toDate)
{
    if (empty($fromDate) && empty($toDate)) {
        return $customer;
    }
    $filterCustom = [];
    foreach ($customer as $custom) {
        if (!empty($fromDate) && (strtotime($custom['day_of_birth']) < strtotime($fromDate))) {
            continue;
        }
        if (!empty($toDate) && (strtotime($custom["day_of_birth"]) > strtotime($toDate))) {
            continue;
        }
        $filterCustom[] = $custom;
    }
    return $filterCustom;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <title>Document</title>
</head>
<body>
<?php
$fromDate = NULL;
$toDate = NULL;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fromDate = $_POST["from"];
    $toDate = $_POST["to"];
}
$filterCustom = searchByDate($customer_list, $fromDate, $toDate);
?>
<form method="post">
    From : <input type="text" id="from" name="from" placeholder="yyyy/mm/dd"
                  value="<?php echo isset($fromDate) ? $fromDate : ''; ?>">
    To : <input type="text" id="to" name="to" placeholder="yyyy/mm/dd"
                value="<?php echo isset($toDate) ? $toDate : ''; ?>">
    <input type="submit" id="submit" value="Loc">
</form>

<table border="0">
    <caption><h2>Danh sách khách hàng</h2></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php foreach ($filterCustom as $index => $value): ?>
        <tr>
            <td><?php echo $index + 1; ?></td>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['day_of_birth']; ?></td>
            <td><?php echo $value['address']; ?></td>
            <td>
                <div class="profile"><img src="<?php echo $value['profile']; ?>"/></div>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>