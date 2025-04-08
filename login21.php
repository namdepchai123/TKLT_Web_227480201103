<?php
session_start();

// Giả lập thông tin đăng nhập (có thể thay bằng truy vấn CSDL)
$valid_username = 'admin';
$valid_password = '123456';

// Nhận dữ liệu từ form
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === $valid_username && $password === $valid_password) {
    // Lưu session
    $_SESSION['username'] = $username;
    header('Location: mainpage21.php');
    exit();
} else {
    echo "<p>Sai tên đăng nhập hoặc mật khẩu!</p>";
    echo "<a href='login21.html'>Quay lại</a>";
}
?>
