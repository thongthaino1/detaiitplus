<?php
echo "<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>";
session_start();
include "models/m_customer.php";
//include_once "models/m_account.php";
//
class c_account
{
    public function  myAccount()
    {
        $data = $_SESSION['user'];
        $id = $data->ID;
        $m_customer = new m_customer();
        $name = $gender = $DoB = $address = $email = $phone = "";
        $customer = $m_customer->showCustomerById($id);

        if($customer)
        {
            $name = $customer->ten_khach_hang;
            $gender = $customer->gioi_tinh;
            $DoB = $customer->ngay_sinh;
            $address = $customer->dia_chi;
            $email = $customer->email;
            $phone = $customer->so_dien_thoai;
        }

        if(isset($_POST['submitProfile']))
        {

            $user = $_SESSION['user'];
            $name = getPOST("name");
            $gender = getPOST("gender");
            $DoB = getPOST("DoB");
            $address = getPOST("address");
            $email = getPOST("email");
            $phone = getPOST("phone");
            $pass =  getPOST("password");
            var_dump($customer);
            if(!$customer)
            {
                $customer_update = $m_customer->insertCustomer($user->ID,$name,$gender,$DoB,$address,$email,$phone);
            }
            else{
                    $customer_update = $m_customer->updateCustomer($user->ID,$name,$gender,$DoB,$address,$email,$phone);
            }

        }

        var_dump($_POST);

        $title = "Quản lý tài khoản";
        $view = "views/account/v_profile.php";
        include_once "templates/layouts.php";


    }

}
