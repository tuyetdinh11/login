<?php
session_start();
require 'db/connect.php'; // Kết nối đến cơ sở dữ liệu

if (isset($_POST['btn-login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `tbl_users` WHERE `username`='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user_data = $result->fetch_assoc();
        $stored_password = $user_data['password'];

        if (password_verify($password, $stored_password)) {
            $_SESSION['username'] = $username;
            // Redirect to a logged-in page
            header('Location: index.html');
            exit();
        } else {
            echo "Sai tên đăng nhập hoặc mật khẩu!";
        }
    } else {
        echo "Người dùng không tồn tại!";
    }
}
