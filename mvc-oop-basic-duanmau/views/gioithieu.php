<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Reset và căn chỉnh chung */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  background-color: #f9f9f9;
  color: #000;
  line-height: 1.6;
}

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

/* FULL WIDTH CHO HEADER & FOOTER */
header,
footer {
  width: 100%;
  background-color: #000;
  color: #fff;
}

/* Container chính cho nội dung */
.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 30px 20px;
}

/* HEADER */
.site-header .container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
}

.logo a {
  color: #fff;
  font-size: 24px;
  font-weight: bold;
  text-decoration: none;
  letter-spacing: 2px;
}

.main-nav ul {
  list-style: none;
  display: flex;
  gap: 20px;
}

.main-nav ul li a {
  color: #ccc;
  text-decoration: none;
  font-size: 16px;
}

.main-nav ul li a:hover,
.main-nav ul li a.active {
  color: #ffd700;
  border-bottom: 2px solid #ffd700;
}

/* GIỚI THIỆU */
.about-section h2 {
  font-size: 28px;
  margin-bottom: 20px;
  color: #000;
}

.about-section p {
  margin-bottom: 16px;
  font-size: 16px;
}

.about-section strong {
  color: #111;
}

/* Footer */
.site-footer {
  padding: 40px 20px;
  text-align: center;
}

.footer-content p {
  margin-bottom: 10px;
  font-size: 14px;
  color: #ccc;
}

.footer-links {
  display: flex;
  justify-content: center;
  gap: 25px;
  list-style: none;
  margin-top: 15px;
}

.footer-links a {
  color: #aaa;
  text-decoration: none;
  font-size: 14px;
}

.footer-links a:hover {
  color: #fff;
}

/* Đăng ký - đăng nhập */
.auth-section {
  margin-top: 20px;
  display: flex;
  justify-content: center;
  gap: 10px;
}

.auth-section input[type="email"] {
  padding: 8px 12px;
  border-radius: 4px;
  border: none;
}

.auth-section button {
  padding: 8px 16px;
  background-color: #fff;
  border: none;
  font-weight: bold;
  cursor: pointer;
  border-radius: 4px;
}

.auth-section button:hover {
  background-color: #ffd700;
}
    </style>
</head>
<body>
<section class="about-section">
  <div class="about-container">
</header>
    <div class="header">
    <div class="header-left">
        <img src="public/images/logo.png" alt="Logo UNI STU" class="logo-img">
        <div class="logo-text">UNI STU</div>
    </div>

    <div class="nav">
        <a href="index.php?act=home">TRANG CHỦ</a>
        <span>|</span>
        <a href="index.php?act=sanpham" >SẢN PHẨM</a>
        <span>|</span>
        <a href="index.php?controller=product&act=thongtin" >THÔNG TIN</a>
        <span>|</span>
        <a href="index.php?act=gioithieu" class="active">GIỚI THIỆU</a>
        <span>|</span>
        <a href="index.php?act=lienhe">LIÊN HỆ</a>
        <div class="icons">
            <i class="fas fa-search"></i>
            <i class="fas fa-user"></i>
            <i class="fas fa-shopping-cart"></i>
        </div>
    </div>
</div>
        <h2>VỀ CHÚNG TÔI – UNI STU</h2>
    <div class="about-content">
      <p>
        <strong>UNI STU</strong> không chỉ là một thương hiệu thời trang – chúng tôi là tiếng nói của một thế hệ. Chúng tôi mang đến phong cách **Unisex hiện đại**, nơi mọi giới hạn về giới tính đều được xoá bỏ, để bạn tự tin là chính mình.
      </p>
      <p>
        Được thành lập bởi những người trẻ đầy nhiệt huyết và đam mê sáng tạo, UNI STU hướng tới việc tạo ra những thiết kế **tối giản nhưng đậm cá tính**, pha trộn giữa sự mềm mại và mạnh mẽ – giữa sự thanh lịch và bụi bặm. Mỗi sản phẩm của chúng tôi không chỉ đơn thuần là trang phục, mà còn là tuyên ngôn cá nhân của người mặc.
      </p>
      <p>
        Chúng tôi tin rằng **thời trang không có giới hạn**. Dù bạn là ai, bạn đều có quyền thể hiện cá tính riêng qua từng đường cắt, màu sắc và chất liệu. Với chất lượng vải cao cấp, thiết kế độc đáo và dịch vụ khách hàng tận tâm, UNI STU luôn đặt sự trải nghiệm của bạn lên hàng đầu.
      </p>
      <p>
        Hãy cùng chúng tôi bước vào hành trình thời trang của chính bạn. **Thể hiện bản thân. Khác biệt. Đậm chất riêng.**<br>
        <strong>#BE_YOURSELF</strong> cùng <strong>#UNISTU</strong>
      </p>
    </div>
    <div class="about-image">
      <img src="https://i.imgur.com/vRPaUGC.jpg" alt="UNI STU Fashion" />
    </div>
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
</section>
<style>
    /* FOOTER */
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
}

.footer-btn:hover {
    background-color: #FFD447;
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

</style>
</body>
</html>

