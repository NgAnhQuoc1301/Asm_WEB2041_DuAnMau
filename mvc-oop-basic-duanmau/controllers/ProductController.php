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
}
