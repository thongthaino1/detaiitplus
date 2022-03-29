<?php
require_once("database.php");

class m_coupon extends database
{
    public function selectAll()
    {
        $sql = "SELECT * FROM khuyen_mai";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function selectOne($id)
    {
        $sql = "SELECT * FROM khuyen_mai where ma_khuyen_mai = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function insert($couponName,$discount,$dateStart,$dateEnd,$status)
    {
        $sql = "Insert into khuyen_mai values (?,?,?,?,?,?)";
        echo $sql;
//        var_dump($couponName,$discount,$dateStart,$dateEnd,$status);
        $this->setQuery($sql);
         $this->execute(array(null,$couponName,$discount,$dateStart,$dateEnd,$status));
        return $this->getLastId();
    }
    public function update($couponName,$discount,$dateStart,$dateEnd,$status,$ID)
    {
        $sql = "UPDATE `khuyen_mai` SET `ten_khuyen_mai` = ?,
 `phan_tram_giam_gia` =  ?, `ngay_bat_dau` = ?, 
`ngay_ket_thuc` = ?, `trang_thai` = ? WHERE `khuyen_mai`.`ma_khuyen_mai` = ?;";
        $this->setQuery($sql);

        return $this->execute(array($couponName,$discount,$dateStart,$dateEnd,$status,$ID));
    }

    public function Gui_mail_khuyen_mai($id)
    {
        $sql = "Select * from nhan_khuyen_mai";
        $this->setQuery($sql);
        $emails = $this->loadAllRows();
        $sql = "Select * from khuyen_mai where ID = ?";
        $this->setQuery($sql);
        $coupon = $this->loadRow(array($id));
        $title = "<b>Tech_S</b>    Khuyến mãi dành cho bạn";
        $content = "Chương trình khuyến mãi của chúng tôi đã bắt đầu ";
        $content .= "Thời gian từ " . $coupon->ngay_bat_dau . "đến" . $coupon->ngay_ket_thuc;

        $arr = [];
        foreach ($emails as $val) {
            $arr[] = $val->email;
        }
        $bcc = implode(",", $arr);
        Helper::Gui_mail($title, $content, $bcc);

    }
}

