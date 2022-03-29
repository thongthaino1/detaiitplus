<?php
include_once "../models/m_coupon.php";
if (isset($_POST['id'])) {
    $m = new m_coupon();
    $id = $_POST['id'];
    $sql = 'DELETE from khuyen_mai where ma_khuyen_mai = ' . $id;
    $m->setQuery($sql);
    $delete =  $m->execute();
    if ($delete) {
        echo "success";
    } else {
        echo "fail";
    }







}