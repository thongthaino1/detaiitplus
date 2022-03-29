<?php
include_once "../models/m_coupon.php";
include_once "../models/m_customer.php";
include_once "../../libs/Helper.php";
if(isset($_POST['id']))
{
    $id = $_POST['id'];
    $m_coupon = new m_coupon();
    $coupon = $m_coupon->selectOne($id);
    $m_customer = new m_customer();
    $customer = $m_customer->selectAllEmail();
    $emails = [];
    foreach ($customer as $v)
    {
        $emails[] = $v->email;
    }
    $emails  = implode(",",$emails);
    $title = "Khuyến mãi từ TECH-S Company".":".$coupon->ten_khuyen_mai;
    $content = "Chúng tôi đang giảm giá sốc các loại sản phẩm được bày bán trên web thương mại với mức giá ưu đãi 
    chỉ còn <p style='color: orange'>".(100 - $coupon->phan_tram_giam_gia)."</p>% giá trị sản phẩm<br>";
    $content .= "Thòi gian khuyến mãi từ ngày ".date('d-m-Y',strtotime($coupon->ngay_bat_dau))." đến hết ngày  ".date('d-m-Y',strtotime($coupon->ngay_ket_thuc));
    $content .= "<br><i>Qúy khách hàng hãy nhanh tay để nhận được các ưu đãi hấp dẫn </i>";
    $content .= "<br><p style='color: blue'>From TS with love</p>";
    $bcc = $emails;
    Helper::Gui_mail($title,$content,$bcc);

}