<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Hiển thị toàn bộ dữ liệu</title>
    <style>
        table {
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px 12px;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>
    <h1>Hiển thị tất cả dữ liệu trong CSDL</h1>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "quanlybanhang");
    if (!$conn) {
        die("Lỗi kết nối: " . mysqli_connect_error());
    }

    // Hiển thị bảng hanghoa
    echo "<h2>Bảng Hàng Hóa</h2>";
    $sql = "SELECT * FROM hanghoa";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th>Mã hàng</th><th>Tên hàng</th><th>Mã NSX</th><th>Năm SX</th><th>Giá</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>{$row['mahang']}</td><td>{$row['tenhang']}</td><td>{$row['mansx']}</td><td>{$row['namsx']}</td><td>{$row['gia']}</td></tr>";
        }
        echo "</table>";
    }

    // Hiển thị bảng nhasanxuat
    echo "<h2>Bảng Nhà Sản Xuất</h2>";
    $sql = "SELECT * FROM nhasanxuat";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th>Mã NSX</th><th>Tên NSX</th><th>Quốc gia</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>{$row['mansx']}</td><td>{$row['tennsx']}</td><td>{$row['quocgia']}</td></tr>";
        }
        echo "</table>";
    }

    // Hiển thị bảng khachhang
    echo "<h2>Bảng Khách Hàng</h2>";
    $sql = "SELECT * FROM khachhang";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th>Mã KH</th><th>Tên KH</th><th>Năm sinh</th><th>Điện thoại</th><th>Địa chỉ</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>{$row['makh']}</td><td>{$row['tenkh']}</td><td>{$row['namsinh']}</td><td>{$row['dienthoai']}</td><td>{$row['diachi']}</td></tr>";
        }
        echo "</table>";
    }

    // Hiển thị bảng hoadon
    echo "<h2>Bảng Hóa Đơn</h2>";
    $sql = "SELECT * FROM hoadon";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th>Mã HD</th><th>Mã KH</th><th>Mã hàng</th><th>Số lượng</th><th>Thành tiền</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>{$row['mahd']}</td><td>{$row['makh']}</td><td>{$row['mahang']}</td><td>{$row['soluong']}</td><td>{$row['thanhtien']}</td></tr>";
        }
        echo "</table>";
    }

    mysqli_close($conn);
    ?>
</body>
</html>
