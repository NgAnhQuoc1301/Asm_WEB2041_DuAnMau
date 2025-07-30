<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
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
        .contact-page {
    padding: 60px 40px;
    background-color: #f5f5f5;
    font-family: Arial, sans-serif;
}

.contact-page h2 {
    text-align: center;
    font-size: 28px;
    margin-bottom: 40px;
    color: #000;
    letter-spacing: 2px;
}

.contact-container {
    max-width: 1170px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    gap: 40px;
}

.contact-info, .contact-form {
    flex: 1;
    background: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

.contact-info h3,
.contact-form h3 {
    font-size: 20px;
    margin-bottom: 20px;
    color: #111;
}

.contact-info p {
    margin: 10px 0;
    font-size: 15px;
    color: #333;
}

.contact-info i {
    margin-right: 10px;
    color: #999;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 12px;
    margin-bottom: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

.contact-form button {
    padding: 12px 20px;
    background-color: #000;
    color: #fff;
    border: none;
    border-radius: 30px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s ease;
}

.contact-form button:hover {
    background-color: #444;
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
        <a href="index.php?act=home">TRANG CHỦ</a>
        <span>|</span>
        <a href="index.php?act=sanpham" >SẢN PHẨM</a>
        <span>|</span>
        <a href="index.php?controller=product&act=thongtin" >THÔNG TIN</a>
        <span>|</span>
        <a href="index.php?act=gioithieu" >GIỚI THIỆU</a>
        <span>|</span>
        <a href="index.php?act=lienhe"class="active">LIÊN HỆ</a>
        <div class="icons">
            <i class="fas fa-search"></i>
            <i class="fas fa-user"></i>
            <i class="fas fa-shopping-cart"></i>
        </div>
    </div>
</div>
        
    <section class="contact-page">
        <h2>LIÊN HỆ VỚI CHÚNG TÔI</h2>
    <div class="contact-container">
    
        <div class="contact-info">
            <h3>Thông tin liên hệ</h3>
            <p><i class="fas fa-map-marker-alt"></i> 123 Đường Thời Trang, Quận 1, TP.HCM</p>
            <p><i class="fas fa-phone"></i> 0909 999 999</p>
            <p><i class="fas fa-envelope"></i> unistu@fashion.vn</p>
            <p><i class="fas fa-clock"></i> Thứ 2 - Thứ 7: 9:00 - 21:00</p>
        </div>

        <div class="contact-form">
            <h3>Gửi tin nhắn</h3>
            <form action="#" method="post">
                <input type="text" name="name" placeholder="Họ và tên" required>
                <input type="email" name="email" placeholder="Email" required>
                <textarea name="message" rows="5" placeholder="Nội dung tin nhắn..." required></textarea>
                <button type="submit">Gửi liên hệ</button>
            </form>
        </div>
    </div>
</section>
<footer class="main-footer">
  <div class="footer-container">
    <div class="footer-left">
      <img src="public/images/banner-footer.png" alt="UNI STU Footer">
    </div>
    <div class="footer-right">
      <form class="newsletter-form">
        <input type="email" placeholder="Nhập email của bạn..." required>
        <button class="footer-btn">Đăng ký</button>
        <button class="footer-btn">Đăng nhập</button>
      </form>
      <div class="social-icons">
        <a href="#"><img src="public/images/facebook.png" alt="Facebook"></a>
        <a href="#"><img src="public/images/youtube.png" alt="YouTube"></a>
        <a href="#"><img src="public/images/instagram.png" alt="Instagram"></a>
      </div>
      <div class="contact-info">
        <p>Địa chỉ: 123 Đường ABC, Quận 1, TP. HCM</p>
        <p>Hotline: 0123 456 789</p>
        <p>Email: support@unistu.vn</p>
      </div>
    </div>
  </div>
  <div class="copyright">
    &copy; 2025 UNI STU | Thiết kế bởi UNI STU
  </div>
</footer>

</body>
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
  margin: 5px;
  cursor: pointer;
  border: none;
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
</html>

