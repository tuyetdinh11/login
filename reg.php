<?php
require 'db/connect.php';

if (isset($_POST['btn-reg'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    if (!empty($username) && !empty($password) && !empty($email) && !empty($gender)) {
        // Hash mật khẩu trước khi lưu vào cơ sở dữ liệu
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO `tbl_users` (`username`, `password`, `email`, `gender`) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("ssss", $username, $hashed_password, $email, $gender);
            if ($stmt->execute()) {
                echo "Đăng kí thành công";
            } else {
                echo "Lỗi khi thêm người dùng: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Lỗi trong câu truy vấn: " . $conn->error;
        }
    }
}
?>
<br>
<a href="login.php">Quay lại trang đăng nhập</a>