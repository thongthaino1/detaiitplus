<?php
require_once ("database.php");
class m_bill extends database{
    public function insertBill($ID, $ID_nguoi_dung, $ngay_lap, $hinh_thuc_thanh_toan, $tong_tien, $ghi_chu, $trang_thai){
        $sql = "INSERT INTO hoa_don VALUES (?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        $this->execute(array($ID, $ID_nguoi_dung, $ngay_lap, $hinh_thuc_thanh_toan, $tong_tien, $ghi_chu, $trang_thai));
        echo $this->getLastItem();
        return $this->getLastItem();
    }

    public function insertBillDetail($detail = []){
        $sql = "INSERT INTO  ct_hoa_don value (?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array(null,$detail['ID_hoa_don'], $detail['ID_san_pham'], $detail['so_luong'], $detail['thanh_tien']));
    }

}