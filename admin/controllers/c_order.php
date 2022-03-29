<?php
include_once 'check_login.php';
include_once "models/m_order.php";
include_once "models/m_customer.php";
include_once "models/m_product.php";
echo "<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>";

class c_order
{
    public function index(){
        $m_order = new m_order();
        $list = $m_order->selectAll();
        $title = "Đơn hàng";
        $view= "view/v_order/v_order.php";
        include_once "templates/layouts.php";
    }
    public function showBillDetail(){
        $id = "";
        $id = $_GET['id'];
        $m_order = new m_order();
        $list = $m_order->selectBillDetail($id);
        $title = "Chi tiết đơn hàng";
        $view= "view/v_order/v_order_details.php";
        include_once "templates/layouts.php";
    }

}
