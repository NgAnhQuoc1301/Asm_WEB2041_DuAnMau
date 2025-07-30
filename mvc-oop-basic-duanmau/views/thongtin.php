<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thông tin - UNI STU</title>
    <style>
/* ===== Reset & Cơ bản ===== */
/* ===== Reset & Base ===== */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background: #fff;
    color: #000;
    font-family: Arial, sans-serif;
    line-height: 1.6;
}

/* ===== Header ===== */
/* ===== Header (giống sản phẩm) ===== */
.header {
    background-color: #000;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 16px 60px;
    border-bottom: 1px solid #333;
}

.header-left {
    display: flex;
    align-items: center;
}

.logo-img {
    height: 40px;
    margin-right: 12px;
}

.logo-text {
    font-size: 24px;
    font-weight: bold;
    letter-spacing: 1px;
    color: white;
}

.nav {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 14px;
}

.nav a {
    color: white;
    text-decoration: none;
    font-weight: bold;
    padding: 0 5px;
}

.nav span {
    color: white;
    font-weight: normal;
}

.nav a:hover,
.nav a.active {
    color: #FFD447;
}

.icons {
    display: flex;
    align-items: center;
    margin-left: 15px;
    gap: 12px;
}

.icons i {
    font-size: 16px;
    color: #A678E2; /* tím nhạt giống hình */
}


/* ===== Banner Thông Tin ===== */
.info-banner {
    position: relative;
    width: 100%;
    height: 300px;
    background-image: url('public/images/banner-thongtin.jpg');
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
}

.info-banner-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4);
}

.info-banner h1 {
    color: #fff;
    font-size: 40px;
    font-weight: bold;
    position: relative;
    z-index: 2;
    text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.6);
    text-transform: uppercase;
}

/* ===== Main Content ===== */
main {
    padding: 60px 20px;
    text-align: center;
}

main h1 {
    font-size: 36px;
    margin-bottom: 20px;
}

main p {
    max-width: 800px;
    margin: auto;
    font-size: 18px;
    color: #444;
}

main img {
    width: 80%;
    margin: 40px auto;
    border-radius: 10px;
}

/* ===== Section ===== */
section {
    margin-top: 60px;
}

section h2 {
    font-size: 26px;
    margin-bottom: 12px;
}

section ul {
    list-style: none;
    padding-left: 0;
    font-size: 16px;
    color: #333;
}

section ul li {
    margin: 8px 0;
}

/* ===== Liên hệ ===== */
.contact-container {
    max-width: 700px;
    margin: 40px auto;
    background: #f9f9f9;
    padding: 40px;
    border: 1px solid #ccc;
    border-radius: 12px;
    text-align: left;
}

.contact-container h2 {
    font-size: 26px;
    margin-bottom: 20px;
    border-left: 5px solid #444;
    padding-left: 12px;
}

.contact-container p,
.contact-container a {
    font-size: 16px;
    color: #000;
}

.contact-link {
    color: #000;
    text-decoration: none;
}

.contact-link:hover {
    text-decoration: underline;
}

/* ===== Footer ===== */
.main-footer {
    background-color: #000;
    color: #fff;
    padding: 30px 0 10px;
    font-size: 14px;
}

.footer-container {
    max-width: 1170px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    padding: 0 20px;
    flex-wrap: wrap;
    gap: 30px;
}

.footer-left img {
    max-width: 300px;
    border-radius: 8px;
}

.footer-right {
    flex: 1;
}

.newsletter-form {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 15px;
}

.newsletter-form input[type="email"] {
    padding: 10px;
    border: none;
    border-radius: 4px;
    width: 240px;
    outline: none;
}

.footer-btn {
    background-color: #fff;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
    border-radius: 4px;
    font-weight: bold;
    transition: 0.3s;
}

.footer-btn:hover {
    background-color: #FFD447;
}

.social-icons a {
    margin-right: 15px;
    display: inline-block;
}

.social-icons img {
    width: 24px;
    height: 24px;
}

.contact-info {
    margin-top: 10px;
    font-size: 14px;
    color: #ccc;
}

.copyright {
    text-align: center;
    padding-top: 20px;
    border-top: 1px solid #444;
    margin-top: 20px;
    font-size: 13px;
    color: #aaa;
}

    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
    <div class="header-left">
        <img src="public/images/logo.png" alt="Logo UNI STU" class="logo-img">
        <div class="logo-text">UNI STU</div>
    </div>

    <div class="nav">
        <a href="index.php?act=home">TRANG CHỦ</a>
        <span>|</span>
        <a href="index.php?act=sanpham">SẢN PHẨM</a>
        <span>|</span>
        <a href="index.php?controller=product&act=thongtin" class="active">THÔNG TIN</a>
        <span>|</span>
        <a href="index.php?act=gioithieu">GIỚI THIỆU</a>
        <span>|</span>
        <a href="index.php?act=lienhe">LIÊN HỆ</a>
        <div class="icons">
            <i class="fas fa-search"></i>
            <i class="fas fa-user"></i>
            <i class="fas fa-shopping-cart"></i>
        </div>
    </div>
</div>

    <!-- Nội dung chính -->
    <main>
        <h1>UNI STU</h1>
        <p>UNI STU là thương hiệu thời trang unisex hàng đầu, mang phong cách hiện đại, trẻ trung và cá tính.</p>

        <img src="public/images/about-banner.jpg" alt="Banner Giới thiệu">

        <section>
            <h2> UNI STU là thương hiệu thời trang unisex hàng đầu, mang phong cách hiện đại, trẻ trung và cá tính.</h2>
            <ul>
                <li>✔️ Chất lượng là ưu tiên hàng đầu</li>
                <li>✔️ Sáng tạo trong từng thiết kế</li>
                <li>✔️ Phục vụ khách hàng tận tâm</li>
            </ul>
        </section>
        <div style="padding: 40px; max-width: 600px; margin: auto; font-family: Arial, sans-serif;">
    <h2>Thông tin liên hệ UNI STU</h2>

    <p><strong>📞 Điện thoại:</strong><br>
        09.1432.1432
    </p>

    <p><strong>📧 Email:</strong><br>
        <a href="mailto:unistu.contact@gmail.com" style="color: #000;">unistu.contact@gmail.com</a>
    </p>

    <p><strong>🌐 Website:</strong><br>
        <a href="https://unistu.vn" target="_blank" style="color: #000;">www.unistu.vn</a>
    </p>

    <p><strong>💼 Thương hiệu:</strong><br>
        UNI STU – “Thời trang nam unisex dẫn đầu xu hướng”<br>
        Màu sắc chủ đạo: Đen – Trắng – Xám ghi
    </p>
</div>

    </main>

    <!-- Footer -->
    <footer class="main-footer">
    <div class="footer-container">
        <div class="footer-left">
            <img src="public/images/black-friday.jpg" alt="Black Friday Sale" />
        </div>
        <div class="footer-right">
            <form class="newsletter-form">
                <a href="index.php?act=register" class="footer-btn">ĐĂNG KÝ</a>
                <input type="email" placeholder="Email của bạn..." required />
                <a href="index.php?act=login" class="footer-btn">ĐĂNG NHẬP</a>
            </form>
            <div class="social-icons">
                <a href="#"><img src="public/icons/facebook.svg" alt="Facebook"></a>
                <a href="#"><img src="public/icons/youtube.svg" alt="YouTube"></a>
                <a href="#"><img src="public/icons/instagram.svg" alt="Instagram"></a>
            </div>
            <p class="contact-info">
                Hotline: 123456789<br>
                Địa chỉ: Số 255 Khương Hạ, Thanh Xuân, Hà Nội
            </p>
        </div>
    </div>
    <div class="copyright">
        BẢN QUYỀN THUỘC VỀ UNI STU | Thiết kế bởi UNI STU
    </div>
</footer>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Các link khác -->
</head>

</body>
</html>
