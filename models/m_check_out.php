<?php
require_once("database.php");

class m_check_out extends database
{

    public function insertBill($ID_nguoi_dung, $ngay_lap, $hinh_thuc_thanh_toan, $tri_gia, $ghi_chu, $trang_thai)
    {

        $sql = "INSERT INTO `hoa_don` (`ID_nguoi_dung`,
 `ngay_lap`, `hinh_thuc_thanh_toan`, `tri_gia`, 
`ghi_chu`, `trang_thai`) VALUES (?,?,?,?,?,?)";
//        $this->insertBillDetail($ID_insert, $ID_san_pham, $so_luong, $don_gia);
        $this->setQuery($sql);
        $this->execute(array($ID_nguoi_dung, $ngay_lap, $hinh_thuc_thanh_toan, $tri_gia, $ghi_chu, $trang_thai));
        return $this->getLastItem();

    }
    public function insertBillDetail($ID_hoa_don, $ID_san_pham, $so_luong, $don_gia)
    {
        $sql = "INSERT INTO `ct_hoa_don` ( `ID_hoa_don`,
 `ID_san_pham`, `so_luong`, `don_gia`) VALUES (?,?,?,?)";
        $this->setQuery($sql);
       return $this->execute(array($ID_hoa_don, $ID_san_pham, $so_luong, $don_gia));
    }


}
//
//
//}
//

