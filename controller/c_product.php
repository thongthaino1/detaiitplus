<?php
echo "<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>";
session_start();
include_once "models/m_product.php";

class c_product{

    public function showProductDetail(){
        $id = $ten_san_pham = $don_gia = $mo_ta = $so_luong = $hinh_san_pham = $luot_xem = $loai = "";
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_product = new m_product();
            $product = $m_product->showProduct($id);
            if($product){
                $ten_san_pham = $product->ten_san_pham;
                $don_gia = $product->don_gia;
                $mo_ta = $product->mo_ta;
                $so_luong = $product->so_luong;
                $hinh = $product->hinh_san_pham;
                $luot_xem = $product->luot_xem;
                $type = $product->ID_loai_san_pham;
                  $typeName =   $m_product->showType($product->ID_loai_san_pham)->ten_loai_san_pham;
                $related_products = $m_product->showProductbyType($product->ID_loai_san_pham);


                $title = "Chi tiết sản phẩm";
                $view = "views/products/product_details.php";
                require_once "templates/products/layouts.php";
            }else{
                header("Location:shop.php");
        }
        }
        else{
            header("Location:shop.php");
        }


    }
}