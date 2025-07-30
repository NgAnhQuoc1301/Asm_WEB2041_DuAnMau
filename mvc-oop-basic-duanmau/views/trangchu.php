<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>UNI STU - Trang Chủ</title>
    <style>
        /* Reset & Base */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-family: Arial, sans-serif;
    background-color: #fff;
    color: #111;
    line-height: 1.5;
}

/* Header */
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
}
.nav a:hover,
.nav a.active {
    color: #FFD447;
}
.icons {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-left: 15px;
}
.icons i {
    font-size: 16px;
    color: #A678E2;
}

/* Slider */
.slider {
    display: flex;
    overflow: hidden;
}
.slider img {
    width: 33.33%;
    height: auto;
}

/* Section - Sản phẩm nổi bật */
.section {
    padding: 20px;
}
.section h2 {
    margin-bottom: 10px;
    font-size: 20px;
}
.products {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}
.product {
    width: 180px;
    text-align: center;
}
.product img {
    width: 100%;
}
.product p {
    margin: 5px 0;
    font-size: 14px;
}
.product strong {
    display: block;
    margin-top: 5px;
    font-size: 15px;
}
.old-price {
    text-decoration: line-through;
    color: gray;
    font-size: 13px;
}

/* Categories */
.categories {
    display: flex;
    gap: 15px;
    justify-content: center;
    margin: 30px 0;
}
.categories div {
    padding: 10px 20px;
    background: #eee;
    border-radius: 5px;
    font-weight: bold;
    transition: background 0.3s;
}
.categories div:hover {
    background: #FFD447;
    cursor: pointer;
}

/* Sale banner */
.sale-banner {
    width: 100%;
    margin-top: 30px;
}
.sale-banner img {
    width: 100%;
    height: auto;
    border-radius: 8px;
}

/* Footer */
.main-footer {
    background-color: #000;
    color: #fff;
    padding: 30px 0 10px;
    font-family: sans-serif;
}
.footer-container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    max-width: 1170px;
    margin: 0 auto;
    padding: 0 20px;
    flex-wrap: wrap;
}
.footer-left img {
    max-width: 100%;
    width: 300px;
    height: auto;
    object-fit: cover;
    border-radius: 8px;
}
.footer-right {
    flex: 1;
    margin-left: 40px;
}
.newsletter-form {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
    flex-wrap: wrap;
}
.newsletter-form input[type="email"] {
    padding: 10px;
    width: 250px;
    border: none;
    border-radius: 4px;
    margin: 5px 10px;
    outline: none;
}
.footer-btn {
    background-color: #fff;
    color: #000;
    padding: 8px 15px;
    text-decoration: none;
    border-radius: 4px;
    font-weight: bold;
    transition: 0.3s;
    margin: 5px 0;
    display: inline-block;
}
.footer-btn:hover {
    background-color: #FFD447;
    color: #000;
}
.social-icons a {
    margin-right: 15px;
    display: inline-block;
    margin-bottom: 10px;
}
.social-icons img {
    width: 24px;
    height: 24px;
}
.contact-info {
    font-size: 14px;
    margin-top: 10px;
    line-height: 1.6;
}
.copyright {
    text-align: center;
    padding-top: 20px;
    font-size: 13px;
    border-top: 1px solid #444;
    margin-top: 20px;
    color: #aaa;
}

/* Responsive */
@media (max-width: 768px) {
    .header {
        flex-direction: column;
        align-items: flex-start;
        padding: 16px 20px;
    }
    .nav {
        flex-wrap: wrap;
        gap: 8px;
    }
    .products {
        flex-direction: column;
        align-items: center;
    }
    .footer-container {
        flex-direction: column;
        gap: 20px;
    }
    .footer-right {
        margin-left: 0;
    }
    .newsletter-form {
        flex-direction: column;
        align-items: flex-start;
    }
    .newsletter-form input[type="email"] {
        width: 100%;
        margin: 5px 0;
    }
}

    </style>
</head>
<body>

<div class="header">
    <div class="header-left">
        <img src="public/images/logo.png" alt="Logo UNI STU" class="logo-img">
        <div class="logo-text">UNI STU</div>
    </div>

    <div class="nav">
        <a href="index.php?act=home" class="active">TRANG CHỦ</a>
        <span>|</span>
        <a href="index.php?act=sanpham">SẢN PHẨM</a>
        <span>|</span>
        <a href="index.php?controller=product&act=thongtin">THÔNG TIN</a>
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

<div class="slider">
    <img src="uploads/imgproduct/banner1.jpg" alt="Banner 1">
    <img src="uploads/imgproduct/banner2.jpg" alt="Banner 2">
    <img src="uploads/imgproduct/banner3.jpg" alt="Banner 3">
</div>

<div class="section">
    <div class="products">
        <div class="product">
            <h2>Sản Phẩm Hot</h2>
            <img src="uploads/imgproduct/heart-shirt.png" alt="Heart Shirt">
            <p>HEART: BOXY T-SHIRT</p>
            <strong>272.000đ</strong><br>
            <span class="old-price">320.000đ</span>
        </div>
        <div class="product">
            <h2>Sản Phẩm Mới</h2>
            <img src="uploads/imgproduct/striped-shirt.png" alt="Striped Shirt">
            <p>SCRIPT LOGO STRIPED BOXY</p>
            <strong>246.500đ</strong><br>
            <span class="old-price">290.000đ</span>
        </div>
        <div class="product">
            <h2>Sản Phẩm Bán Chạy</h2>
            <img src="uploads/imgproduct/cap.png" alt="Cap">
            <p>VGS LOGO CAP</p>
            <strong>212.500đ</strong><br>
            <span class="old-price">250.000đ</span>
        </div>
    </div>
</div>

<div class="categories">
    <div>PHỤ KIỆN</div>
    <div>SALE</div>
    <div>JACKET</div>
    <div>T-SHIRT</div>
    <div>PANTS</div>
</div>
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
