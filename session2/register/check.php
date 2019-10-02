<?php
function loadRegistrations($filename){
    $jsondata = file_get_contents($filename);
    $arr_data = json_decode($jsondata, true);
    return $arr_data;
}
function saveDataJSON($filename, $name, $email, $phone)
{
    try {
        $contact = array(
            'name' => $name,
            'email' => $email,
            'phone' => $phone
        );
        // converts json data into array
        $arr_data = loadRegistrations($filename);
        // Push user data to array
        array_push($arr_data, $contact);
        //Convert updated array to JSON
        $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
        //write json data into data.json file
        file_put_contents($filename, $jsondata);
        echo "Lưu dữ liệu thành công!";
    } catch (Exception $e) {
        echo 'Lỗi: ', $e->getMessage(), "\n";
    }
}
$nameErr = NULL;
$emailErr = NULL;
$phoneErr = NULL;
$name = NULL;
$email = NULL;
$phone = NULL;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $has_error = false;
    if (empty($name)) {
        $nameErr = "Tên đăng nhập không được để trống!";
        $has_error = true;
    }
    if (empty($email)) {
        $emailErr = "Email không được để trống!";
        $has_error = true;
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Định dạng email sai (xxx@xxx.xxx.xxx)!";
            $has_error = true;
        }
    }
    if (empty($phone)) {
        $phoneErr = " Số điện thoại không được để trống!";
        $has_error = true;
    }
    if ($has_error === false) {
        saveDataJSON("data.json", $name, $email, $phone);
        $name = NULL;
        $email = NULL;
        $phone = NULL;
    }
}
?>