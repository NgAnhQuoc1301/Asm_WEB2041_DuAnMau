<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>UNI STU - Sản phẩm</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<style>/* Reset & Body */
/* Reset & Body */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background-color: #fff;
    color: #000;
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
    color: #A678E2;
}

/* Layout */
main {
    display: flex;
    padding: 30px 20px;
    flex-wrap: wrap;
}

/* Sidebar */
.sidebar {
    width: 200px;
    border: 1px solid #ccc;
    padding: 15px;
    margin-right: 30px;
    flex-shrink: 0;
}

.sidebar h3 {
    font-size: 16px;
    margin-bottom: 10px;
    font-weight: bold;
}

.sidebar ul {
    list-style: none;
}

.sidebar li {
    margin-bottom: 8px;
    font-size: 14px;
    cursor: pointer;
    transition: 0.2s;
}

.sidebar li:hover {
    color: #FFD447;
}

/* Product Section */
.product-listing {
    flex: 1;
}

.product-listing h2 {
    font-size: 24px;
    margin-bottom: 20px;
    border-bottom: 2px solid #000;
    padding-bottom: 10px;
}

.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
    gap: 20px;
}

.product-item {
    text-align: center;
    border: 1px solid #eee;
    padding: 10px;
    background-color: #fff;
    transition: 0.3s;
}

.product-item:hover {
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
}

.product-item img {
    width: 100%;
    height: auto;
}

.product-item h4 {
    margin-top: 10px;
    font-size: 14px;
    font-weight: normal;
}

.product-item p {
    font-size: 14px;
    margin-top: 5px;
}

.product-item s {
    color: #888;
    font-size: 12px;
    margin-left: 5px;
}

/* Sale Banner */
.sale-banner {
    margin-top: 40px;
    text-align: center;
}

.sale-banner img {
    width: 100%;
    max-width: 700px;
    height: auto;
    border-radius: 6px;
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
    height: auto;
    width: 300px;
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
    margin: 5px;
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

    main {
        flex-direction: column;
        padding: 20px;
    }

    .sidebar {
        width: 100%;
        margin-right: 0;
        margin-bottom: 20px;
    }

    .footer-container {
        flex-direction: column;
        gap: 20px;
    }

    .footer-right {
        margin-left: 0;
    }
}


</style>
<body>
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

    <main>
        <aside class="sidebar">
            <h3>DANH MỤC</h3>
            <ul>
                <li>T-SHIRT</li>
                <li>PANTS</li>
                <li>JACKET</li>
                <li>PHỤ KIỆN</li>
                <li>SALE</li>
                <li>HOODIE</li>
            </ul>
        </aside>

        <section class="product-listing">
            <h2>SẢN PHẨM</h2>
            <div class="product-grid">
                <div class="product-item">
                    <img src="public/images/p1.png">
                    <h4>HEART: BOXY T-SHIRT</h4>
                    <p><strong>272.000₫</strong> <s>320.000₫</s></p>
                </div>
                <div class="product-item">
                    <img src="public/images/p2.png">
                    <h4>STRIPED BOXY T-SHIRT</h4>
                    <p><strong>246.500₫</strong> <s>290.000₫</s></p>
                </div>
                <div class="product-item">
                    <img src="public/images/p3.png">
                    <h4>T - SHIRT</h4>
                    <p><strong>212.500₫</strong> <s>250.000₫</s></p>
                </div>
                <div class="product-item">
                    <img src="public/images/p4.png">
                    <h4>PANTS</h4>
                    <p><strong>212.500₫</strong> <s>250.000₫</s></p>
                </div>
                <div class="product-item">
                    <img src="public/images/p5.png">
                    <h4>JACKET</h4>
                    <p><strong>212.500₫</strong> <s>250.000₫</s></p>
                </div>
                <div class="product-item">
                    <img src="public/images/p6.png">
                    <h4>Túi đeo chéo STU</h4>
                    <p><strong>212.500₫</strong> <s>250.000₫</s></p>
                </div>
                <div class="product-item">
                    <img src="public/images/p7.png">
                    <h4>T-SHIRT TRƠN</h4>
                    <p><strong>212.500₫</strong> <s>250.000₫</s></p>
                </div>
                <div class="product-item">
                    <img src="public/images/p8.png">
                    <h4>VGS LOGO CAP</h4>
                    <p><strong>212.500₫</strong> <s>250.000₫</s></p>
                </div>
            </div>

            <div class="sale-banner">
                <img src="public/images/black-friday.png" alt="Black Friday Sale">
            </div>
        </section>
    </main>

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
