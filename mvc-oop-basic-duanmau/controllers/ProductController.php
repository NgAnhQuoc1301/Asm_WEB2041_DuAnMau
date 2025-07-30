<?php
// có class chứa các function thực thi xử lý logic 
class ProductController
{
    public $modelProduct;

    public function __construct()
    {
        $this->modelProduct = new ProductModel();
    }

    public function Home()
    {
        require_once './views/trangchu.php';
    }
        public function SanPham()
    {
        require_once './views/sanpham.php';
    }
        public function ThongTin()
    {
        require_once './views/thongtin.php';
    }
    public function DangKy() {
    require_once './views/dangky.php';
    }

    public function DangNhap() {
        require_once './views/dangnhap.php';
    }

    public function GioiThieu() {
        require_once './views/gioithieu.php';
    }

    public function LienHe() {
        require_once './views/lienhe.php';
    }
}
