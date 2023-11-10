<?php
function validateDK($username, $password, $email, $enterpass, $tel)
{
    $error = [];
    // Validate username
    if (empty($username)) {
        $error['username'] = "Tên không được để trống!";
    } elseif (strlen($username) < 6) {
        $error["username"] = "Tên phải lớn hơn 6 ký tự!";
    } elseif (strlen($username) > 10) {
        $error["username"] = "Tên phải nhỏ hơn 10 ký tự!";
    }

    // Validate password
    if (empty($password)) {
        $error["password"] = "Mật khẩu không được để trống!";
    } elseif (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{8,20}$/", $password)) {
        $error["password"] = "Mật khẩu không đúng định dạng!";
    }

    //Validate Email
    if (empty($email)) {
        $error["email"] = "Email không được để trống!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error["email"] = "Email không đúng định dạng!";
    }

    //Validate tel
    if (empty($tel)) {
        $error["tel"] = "Số điện thoại không được để trống!";
    } elseif (!preg_match("/^0[0-9]{9}$/", $tel)) {
        $error["tel"] = "Số điện thoại không đúng định dạng!";
    }

    if (empty($enterpass)) {
        $error["enterpass"] = "Mật khẩu không được để trống!";
    } elseif ($enterpass != $password) {
        $error['enterpass'] = "Mật khẩu không trùng khớp!";
    }

    return $error;
}
if (isset($_POST['btn']) && $_POST['btn']) {
    if (isset($_POST['username']) && isset($_POST['enterpass']) && isset($_POST['tel'])) {
        $username = $_POST['username'];
        $enterpass = $_POST['enterpass'];
        $tel = $_POST['tel'];
    } else {
        $username = $enterpass = $tel = '';
    }
    $password = $_POST['password'];
    $email = $_POST['email'];


    $error = validateDK($username, $password, $email, $enterpass, $tel);
    if (empty($error)) {
        echo '<script>alert("Đăng ký thành công!")</script>';
    }
}
