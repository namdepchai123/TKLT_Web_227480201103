

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trường Đại học Bạc Liêu - Quản lý nhân sự</title>
    <style>
   /* Đặt lại margin, padding và box-sizing cho tất cả các phần tử để làm sạch layout */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Cài đặt các thuộc tính cơ bản cho body của trang */
body {
    font-family: 'Roboto', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Font chữ */
    background: #f0f4f8; /* Màu nền */
    color: #333; /* Màu chữ */
    line-height: 1.6; /* Khoảng cách dòng */
    min-height: 100vh; /* Đảm bảo chiều cao tối thiểu của body bằng chiều cao màn hình */
    display: flex;
    flex-direction: column; /* Xếp các phần tử theo chiều dọc */
}

/* Thiết lập cho header */
.header {
    display: flex;
    align-items: center; /* Căn giữa theo chiều dọc */
    justify-content: space-between; /* Căn đều các phần tử bên trong header */
    background: linear-gradient(90deg, rgb(132, 202, 248), rgb(135, 218, 236)); /* Màu nền gradient */
    padding: 10px 30px; /* Padding nhỏ lại để header nhỏ hơn */
    color: #fff; /* Màu chữ trong header */
    box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2); /* Bóng nhẹ cho header */
    position: fixed; /* Đảm bảo header cố định ở đầu trang */
    top: 0; /* Vị trí ở trên cùng của trang */
    left: 0;
    right: 0;
    width: 100%; /* Header chiếm toàn bộ chiều rộng */
    z-index: 1000; /* Đảm bảo header nằm trên các phần tử khác */
}

/* Thiết lập cho logo trong header */
.header img {
    height: 50px; /* Thu nhỏ logo */
}

/* Thiết lập cho tiêu đề trong phần thông tin của header */
.header .info h1 {
    font-size: 24px; /* Giảm kích thước chữ tiêu đề */
}

/* Thiết lập cho đoạn văn dưới tiêu đề */
.header .info p {
    font-size: 14px; /* Giảm kích thước chữ phụ */
}

/* Thiết lập cho tiêu đề bên phải trong header */
.header .title-right {
    font-size: 18px; /* Giảm kích thước chữ bên phải */
}

/* Thiết lập cho phần main (nội dung chính của trang) */
.main {
    display: flex; /* Sử dụng flexbox để bố trí */
    flex: 1; /* Đảm bảo phần này chiếm toàn bộ không gian còn lại */
    margin-top: 20px; /* Khoảng cách phía trên */
}

/* Thiết lập cho sidebar (thanh bên) */
.sidebar {
    position: fixed; /* Sidebar cố định */
    top: 120px; /* Khoảng cách từ đầu trang đến thanh bên */
    left: 30px; /* Khoảng cách từ trái sang */
    width: 260px; /* Chiều rộng thanh bên */
    height: calc(100vh - 140px); /* Chiều cao của sidebar chiếm phần còn lại của màn hình */
    background: #ffffff; /* Màu nền của thanh bên */
    padding: 20px; /* Khoảng cách bên trong */
    border-radius: 12px; /* Bo tròn góc */
    box-shadow: 0 4px 12px rgba(0,0,0,0.1); /* Bóng cho sidebar */
    overflow-y: auto; /* Cho phép cuộn dọc nếu nội dung quá dài */
}

/* Thiết lập cho tiêu đề trong sidebar */
.sidebar h3 {
    color: rgb(100, 190, 226); /* Màu tiêu đề */
    font-size: 18px; /* Kích thước chữ */
    margin-top: 20px;
    margin-bottom: 10px;
    border-bottom: 2px solid #e0e0e0; /* Viền dưới */
    padding-bottom: 5px;
}

/* Thiết lập cho các liên kết trong sidebar */
.sidebar a {
    display: block; /* Hiển thị dưới dạng khối */
    color: #333; /* Màu chữ của liên kết */
    text-decoration: none; /* Loại bỏ gạch chân */
    margin: 8px 0; /* Khoảng cách giữa các liên kết */
    padding: 8px 12px; /* Padding bên trong các liên kết */
    border-radius: 8px; /* Bo tròn các liên kết */
    transition: all 0.3s ease; /* Hiệu ứng chuyển động khi hover */
    font-size: 15px; /* Kích thước chữ của liên kết */
}

/* Thiết lập hiệu ứng hover cho các liên kết trong sidebar */
.sidebar a:hover {
    background: #e6f2ff; /* Màu nền khi hover */
    color: rgb(119, 182, 226); /* Màu chữ khi hover */
    padding-left: 20px; /* Thêm khoảng cách khi hover */
}

/* Thiết lập cho phần nội dung chính */
.content {
    flex: 1;
    margin-left: 320px; /* Đẩy nội dung qua phải để tránh sidebar */
    margin-right: 30px;
    margin-bottom: 20px;
    background: #ffffff; /* Màu nền */
    border-radius: 12px; /* Bo tròn các góc */
    padding: 30px; /* Padding bên trong */
    box-shadow: 0 4px 12px rgba(0,0,0,0.1); /* Bóng cho phần nội dung */
    overflow: hidden; /* Ẩn các phần tử bị tràn ra ngoài */
}

/* Thiết lập cho các tiêu đề trong phần nội dung */
.content h2 {
    color: rgb(121, 211, 238); /* Màu tiêu đề */
    font-size: 26px; /* Kích thước chữ tiêu đề */
    margin-bottom: 20px;
}

.content h3 {
    color: rgb(114, 199, 238); /* Màu tiêu đề */
    font-size: 22px; /* Kích thước chữ tiêu đề */
    margin-top: 30px;
    margin-bottom: 10px;
}

/* Thiết lập cho đoạn văn và danh sách trong phần nội dung */
.content p, .content ul {
    font-size: 16px; /* Kích thước chữ */
    margin: 10px 0; /* Khoảng cách giữa các phần tử */
}

/* Thiết lập cho danh sách trong phần nội dung */
.content ul {
    padding-left: 20px; /* Thụt vào bên trái */
    list-style-type: disc; /* Kiểu dấu chấm cho danh sách */
}

/* Thiết lập cho hình ảnh trong phần nội dung */
.content img {
    width: 100%; /* Chiều rộng hình ảnh 100% */
    max-width: 600px; /* Hạn chế chiều rộng tối đa */
    display: block; /* Hiển thị dưới dạng khối */
    margin: 20px auto; /* Căn giữa hình ảnh */
    border-radius: 12px; /* Bo tròn góc ảnh */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15); /* Bóng cho hình ảnh */
}

/* Thiết lập cho footer (chân trang) */
.footer {
    background: rgb(105, 182, 226); /* Màu nền của footer */
    color: white; /* Màu chữ */
    text-align: center; /* Căn giữa chữ */
    padding: 18px; /* Padding cho footer */
    font-size: 14px; /* Kích thước chữ */
    margin-top: auto; /* Đảm bảo footer luôn nằm dưới cùng */
    border-top-left-radius: 12px; /* Bo tròn góc trên bên trái */
    border-top-right-radius: 12px; /* Bo tròn góc trên bên phải */
}

/* Responsive cho mobile (tối ưu hóa cho màn hình nhỏ) */
@media (max-width: 768px) {
    .sidebar {
        position: relative; /* Đặt lại vị trí của sidebar */
        width: 100%; /* Sidebar chiếm 100% chiều rộng */
        height: auto; /* Chiều cao tự động */
        top: 0;
        left: 0;
        margin-bottom: 20px;
    }
    .content {
        margin: 0 20px; /* Giảm khoảng cách bên trái và phải */
    }
    .main {
        flex-direction: column; /* Chuyển sang layout theo chiều dọc */
        padding: 20px;
    }
}

</style>


</head>
<body>

<div class="header">
    <img src="2.png" alt="Logo">
    <div class="info">
        <h1>TRƯỜNG ĐẠI HỌC BẠC LIÊU</h1>
        <p>BAC LIEU UNIVERSITY</p>
    </div>
    <div class="title-right">
        QUẢN LÝ NHÂN SỰ
    </div>
</div>

<div class="container">
    <div class="sidebar">
        <h3>Trang chủ</h3>
        <a href="bai2trang132.php">Giới thiệu</a>

        <h3>Đơn vị trực thuộc</h3>
        <a href="donvi/khoa_ktcn.php">Khoa KT&CN</a>
        <a href="donvi/khoa_supham.php">Khoa Sư phạm</a>
        <a href="donvi/khoa_nnns.php">Khoa NN&NS</a>
        <a href="donvi/khoa_ktvl.php">Khoa Kinh tế và Luật</a>

        <h3>Hồ sơ nhân viên</h3>
        <a href="hosonhanvien/danhsach.php">Danh sách</a>
        <a href="hosonhanvien/xem.php">Xem hồ sơ</a>
        <a href="hosonhanvien/them.php">Thêm hồ sơ</a>
        <a href="hosonhanvien/sua.php">Sửa hồ sơ</a>
        <a href="hosonhanvien/xoa.php">Xóa hồ sơ</a>

        <h3>Quản lý tiền lương</h3>
        <a href="quanlyluong/bangluong.php">Bảng lương</a>
        <a href="quanlyluong/capnhat.php">Cập nhật hồ sơ</a>
        <a href="quanlyluong/timkiem.php">Tìm kiếm</a>
        <a href="quanlyluong/tinhluong.php">Tính lương</a>
        <a href="quanlyluong/tinhthuong.php">Tính thưởng</a>
    </div>

    <div class="content">
    <h2>Giới thiệu Trường Đại học Bạc Liêu</h2>
    <h3>Tên tiếng Anh: BAC LIEU UNIVERSITY</h3>
    <h3>Tên viết tắt: ĐHBL - BLU</h3>

    <p>
        Trường Đại học Bạc Liêu (ĐHBL) được thành lập theo Quyết định số 1558/QĐ-TTg ngày 24/11/2006 của Thủ tướng Chính phủ, 
        là cơ sở giáo dục đại học công lập trực thuộc UBND tỉnh Bạc Liêu và chịu sự quản lý Nhà nước về giáo dục của Bộ Giáo dục và Đào tạo.
    </p>

    <img src="1.jpg" alt="Hình ảnh Trường Đại học Bạc Liêu">

    <h3>II. Sứ mệnh và Tầm nhìn</h3>
    <p><strong>Sứ mệnh:</strong> Đào tạo nguồn nhân lực chất lượng cao, nghiên cứu khoa học, ứng dụng và chuyển giao công nghệ, 
    góp phần phát triển kinh tế - xã hội tỉnh Bạc Liêu và khu vực Đồng bằng sông Cửu Long.</p>
    <p><strong>Tầm nhìn đến năm 2030:</strong> Phấn đấu trở thành trường đại học ứng dụng, đào tạo đa ngành, đa lĩnh vực, 
    có uy tín trong nước và khu vực ASEAN.</p>

    <h3>III. Các ngành đào tạo</h3>
    <p>Trường tổ chức đào tạo ở các nhóm ngành:</p>
    <ul>
        <li>Công nghệ thông tin, Kỹ thuật điện - điện tử</li>
        <li>Nông nghiệp, Thủy sản</li>
        <li>Kinh tế, Quản trị kinh doanh, Kế toán</li>
        <li>Luật, Xã hội học</li>
        <li>Sư phạm Toán, Ngữ văn, Tiếng Anh, Giáo dục Mầm non, Giáo dục Tiểu học</li>
    </ul>

    <h3>IV. Cơ sở vật chất</h3>
    <p>
        Trường có cơ sở vật chất khang trang với khuôn viên rộng rãi, phòng học lý thuyết và thực hành hiện đại, thư viện điện tử, 
        ký túc xá sinh viên, trung tâm nghiên cứu khoa học, phòng thực nghiệm đạt chuẩn khu vực.
    </p>

    <h3>V. Hoạt động nghiên cứu khoa học</h3>
    <p>
        Trường chú trọng đẩy mạnh nghiên cứu khoa học, thực hiện các đề tài ứng dụng phục vụ phát triển kinh tế - xã hội, 
        tổ chức hội thảo khoa học trong và ngoài nước, tham gia nhiều chương trình hợp tác quốc tế.
    </p>

    <h3>VI. Hợp tác quốc tế</h3>
    <p>
        Nhà trường đã thiết lập mối quan hệ hợp tác với nhiều trường đại học, viện nghiên cứu uy tín ở Nhật Bản, Hàn Quốc, Thái Lan, 
        nhằm nâng cao chất lượng đào tạo và nghiên cứu.
    </p>

    <h3>VII. Cam kết chất lượng</h3>
    <p>
        Trường Đại học Bạc Liêu cam kết đào tạo ra những thế hệ sinh viên năng động, sáng tạo, có kiến thức chuyên sâu, kỹ năng nghề nghiệp vững chắc, 
        đáp ứng nhu cầu của thị trường lao động và hội nhập quốc tế.
    </p>
</div>

</div>

<div class="footer">
    Địa chỉ: 178 Võ Thị Sáu, P.8, TP. Bạc Liêu | Điện thoại: 02913822653 | Email: mail@blu.edu.vn
</div>

</body>
</html>
