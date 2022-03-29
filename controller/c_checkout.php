<?php
echo "<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>";
session_start();
require_once('vendor/autoload.php');
use Stripe\Charge;
$stripe = [
    "secret_key"      => "sk_test_YuH8iOLZlo6r314XALggpFV8",
    "publishable_key" => "pk_test_RktRYcffDgayxWK6b7Gho9Ol",
];
\Stripe\Stripe::setApiKey($stripe['secret_key']);

include_once "models/m_product.php";
include_once "models/m_user.php";
include "models/m_bill.php";
include "models/m_customer.php";

class c_checkout{

    public function addBill(){
        $m_customer = new m_customer();
        $m_bill = new m_bill();
        $m_product = new m_product();
        if(isset($_SESSION["btn_check_out"]) && empty($_POST['stripeToken'])){
//            var_dump($_POST);
            unset($_SESSION["btn_check_out"]);
            $ID = null;
            $ID_nguoi_dung = getPOST("id_nguoi_dung");
            $ngay_lap = date('Y/m/d H:i:s');
            $hinh_thuc_thanh_toan = getPOST("hinh_thuc_thanh_toan");
            $trang_thai = 0;
            $tong_tien =   getPOST("tong_tien");
            $ghi_chu =  getPOST("ghi_chu");
            $ID_san_pham =   getPOST("id_san_pham");
            $so_luong =  getPOST("so_luong");
            $thanh_tien = getPOST("thanh_tien");
            echo $ghi_chu;
            $temp = [];
            $result_insert = $m_bill->insertBill($ID, $ID_nguoi_dung, $ngay_lap, $hinh_thuc_thanh_toan, $tong_tien, $ghi_chu, $trang_thai);

            if(isset($ID_san_pham) && is_array($ID_san_pham)){
                foreach ($ID_san_pham as $key => $val){
                    $temp[] = [
                        'ID_san_pham' => $val,
                        'so_luong' => $so_luong[$key],
                        'thanh_tien' => $thanh_tien[$key],
                        'ID_hoa_don' => $result_insert
                    ];
                }
            }
//            print_r($temp['ID_san_pham']);
            foreach ($temp as $k => $v){
                $result = $m_bill->insertBillDetail($v);
                $sl = $m_product->showProductById($v);
//                var_dump($v['so_luong']);
                $update_qty = $m_product->updateQuantity($v,$sl->so_luong - $v['so_luong']);
            }

            $id_nguoi_dung = getPOST("id_nguoi_dung");
            $ten_khach_hang =  getPOST("ten_khach_hang");
            $gioi_tinh = getPOST("gioi_tinh");
            $ngay_sinh = getPOST("ngay_sinh");
            $dia_chi = getPOST("dia_chi");
            $so_dien_thoai = getPOST("so_dien_thoai");
            $email = getPOST("email");
            $customer_update = $m_customer->updateCustomer($ten_khach_hang,$gioi_tinh,$ngay_sinh,$dia_chi,$so_dien_thoai,$email,$id_nguoi_dung);
        }
    }
    public function charge() {

        $m_customer = new m_customer();
        $m_bill = new m_bill();
        $m_product = new m_product();
//        var_dump($_POST);
//        var_dump($_SESSION);
        if(isset($_POST['stripeToken']) && $_POST['stripeToken'] != '' )
        {
            $token  = $_POST['stripeToken'];
            $email  = $_POST['stripeEmail'];
            $discount  = $_POST['txtDiscount'];
//        $customer = \Stripe\Customer::create([
//            'email' => $email,
//            'source'  => $token,
//        ]);
//        $charge = \Stripe\Charge::create([
//            'customer' => $customer->id,
//            'amount'   => $moneyVND,
//            'currency' => 'usd',
//        ]);
            $ID = null;
            $ID_nguoi_dung =  getPOST("id_nguoi_dung");
            $ngay_lap = date('Y/m/d H:i:s');
            $hinh_thuc_thanh_toan = getPOST("hinh_thuc_thanh_toan");
            $trang_thai = 1;
            $tong_tien =   getPOST("tong_tien");
            $ghi_chu =  getPOST("ghi_chu");

            $ID_san_pham =  getPOST("id_san_pham");
            $so_luong =   getPOST("so_luong");
            $thanh_tien =   getPOST("thanh_tien");

            $temp = [];
            $result_insert = $m_bill->insertBill($ID, $ID_nguoi_dung, $ngay_lap, $hinh_thuc_thanh_toan, $tong_tien, $ghi_chu, $trang_thai);

            if(isset($ID_san_pham) && is_array($ID_san_pham)){
                foreach ($ID_san_pham as $key => $val){
                    $temp[] = [
                        'ID_san_pham' => $val,
                        'so_luong' => $so_luong[$key],
                        'thanh_tien' => $thanh_tien[$key],
                        'ID_hoa_don' => $result_insert
                    ];
                }
            }
//            print_r($temp['ID_san_pham']);
            foreach ($temp as $k => $v){
                $result = $m_bill->insertBillDetail($v);
                $sl = $m_product->showProductById($v);
//                var_dump($v['so_luong']);
                $update_qty = $m_product->updateQuantity($v,$sl->so_luong - $v['so_luong']);
            }


            $id_nguoi_dung = getPOST("id_nguoi_dung");
            $ten_khach_hang = getPOST("ten_khach_hang");
            $gioi_tinh = getPOST("gioi_tinh");
            $ngay_sinh = getPOST("ngay_sinh");
            $dia_chi = getPOST("dia_chi");
            $so_dien_thoai = getPOST("so_dien_thoai");
            $email = getPOST("email");
            $customer_update = $m_customer->updateCustomer($ten_khach_hang,$gioi_tinh,$ngay_sinh,$dia_chi,$so_dien_thoai,$email,$id_nguoi_dung);
        }

    }


    public function showCheckOut(){
        $data = $_SESSION['user'];
        $id = $data->ID;
        $m_customer = new m_customer();
        $customer = $m_customer->showCustomerById($id);
//        var_dump($customer->ID_nguoi_dung);

        $title = "Thanh toán";
        $view = "views/check_out/v_check_out.php";
        require_once "templates/layouts.php";
    }
}