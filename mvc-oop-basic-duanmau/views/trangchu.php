<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>UNI STU - Trang Chủ</title>
    <style>
        body { margin: 0; font-family: Arial, sans-serif; color: #111; background: #fff; }
        header { background: #111; color: #fff; padding: 10px 20px; display: flex; align-items: center; justify-content: space-between; }
        header h1 { font-size: 24px; }
        nav a { color: white; margin: 0 10px; text-decoration: none; }
        .slider { display: flex; overflow: hidden; }
        .slider img { width: 33.33%; height: auto; }
        .section { padding: 20px; }
        .section h2 { margin-bottom: 10px; }
        .products { display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; }
        .product { width: 180px; text-align: center; }
        .product img { width: 100%; }
        .old-price { text-decoration: line-through; color: gray; font-size: 14px; }
        .categories { display: flex; gap: 15px; justify-content: center; margin: 30px 0; }
        .categories div { padding: 10px 20px; background: #eee; border-radius: 5px; font-weight: bold; }
        .sale-banner { width: 100%; margin-top: 30px; }
        footer { background: #000; color: white; text-align: center; padding: 20px; font-size: 14px; }
        .newsletter input { padding: 6px; width: 200px; margin-right: 10px; }
    </style>
</head>
<body>

<header>
    <h1>UNI STU</h1>
    <nav>
    <div class="menu">
        <a href="index.php?act=home">TRANG CHỦ</a> |
        <a href="index.php?act=sanpham">SẢN PHẨM</a> |
        <a href="index.php?controller=product&act=thongtin">THÔNG TIN</a>
    </div>
        <a href="#">🔍</a>
        <a href="#">👤</a>
        <a href="#">🛒</a>
    </nav>
</header>

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

<div class="sale-banner">
    <img src="uploads/imgproduct/sale-banner.jpg" alt="Sale 50%" style="width: 100%;">
</div>

<footer>
    <div class="newsletter">
        <input type="text" placeholder="Nhập địa chỉ email...">
        <button>ĐĂNG KÝ</button>
    </div>
    <p>Hotline: 123456789</p>
    <p>Địa chỉ: Số 285 Khuong Ha, Thanh Xuân, Hà Nội</p>
    <p>BẢN QUYỀN THUỘC VỀ UNI STU | THIẾT KẾ BỞI BẠN</p>
</footer>

</body>
</html>
