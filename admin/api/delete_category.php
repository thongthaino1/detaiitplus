<?php
include_once "../models/m_category.php";
if (isset($_POST['id'])) {
    $m = new M_category();
    $id = $_POST['id'];
    $sql = 'DELETE from loai_san_pham where ID = ' . $id;
    $m->setQuery($sql);
    $delete =  $m->execute();
    if ($delete) {
        echo "success";
    } else {
        echo "fail";
    }







}