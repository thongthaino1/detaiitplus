<?php
echo "<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>";
session_start();
include_once "models/m_product.php";
class c_cart{

    public function showCart(){

        if(isset($_SESSION['cartList']) && isset($_COOKIE['cart'])){
            $cartList = $_SESSION['cartList'];


            $title = "Giỏ hàng";
            $view = "views/cart/v_cart.php";
            require_once "templates/cart/layouts.php";
        }
        else{
            echo '<body><script>swal("Giỏ hàng trông vui lòng mua hàng trước");</body></script>';
//            header('Location:shop.php');
        }

    }
}