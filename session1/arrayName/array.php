<?php
$customerlist = array(
    "1" => array("ten" => "Mai Văn Hoàn",
        "ngaysinh" => "1983-08-20",
        "diachi" => "Hà Nội",
        "anh" => "images/img1.jpg"),
    "2" => array("ten" => "Nguyễn Văn Nam",
        "ngaysinh" => "1983-08-20",
        "diachi" => "Bắc Giang",
        "anh" => "images/img2.jpg"),
    "3" => array("ten" => "Nguyễn Thái Hòa",
        "ngaysinh" => "1983-08-21",
        "diachi" => "Nam Định",
        "anh" => "images/img3.jpg"),
    "4" => array("ten" => "Trần Đăng Khoa",
        "ngaysinh" => "1983-08-22",
        "diachi" => "Hà Tây",
        "anh" => "images/img4.jpg"),
    "5" => array("ten" => "Nguyễn Đình Thi",
        "ngaysinh" => "1983-08-17",
        "diachi" => "Hà Nội",
        "anh" => "images/img5.jpg")
);
foreach ($customerlist as $key => $values) {
    echo "<tr>";
    echo "<td>" . $key . "</td>";
    echo "<td>" . $values['ten'] . "</td>";
    echo "<td>" . $values['ngaysinh'] . "</td>";
    echo "<td>" . $values['diachi'] . "</td>";
    echo "<td><image src ='" . $values['anh'] . "' width = '60px' height ='60px'/></td>";
    echo "</tr>";
}