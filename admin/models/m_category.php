<?php
include_once ("database.php");
class M_category extends database
{
    public function Read_category(){
        $sql = "select * from loai_san_pham ";
        $this->setQuery($sql);
        return $this->loadAllRows();

    }
    public function  add_category($ID,$ten_loai_san_pham,$trang_thai)
    {
        $sql ="insert into loai_san_pham values(?,?,?)";
        $this->setQuery($sql);
        $this->execute(array($ID,$ten_loai_san_pham,$trang_thai));

        return $this->getLastId();

    }
    public function Read_category_by_id($ID)
    {
        $sql = "select * from loai_san_pham where ID = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ID));
    }
    public function return_category_by_name($ten_loai_san_pham)
    {
        $sql = "SELECT COUNT(*) as KQ FROM loai_san_pham WHERE ten_loai_san_pham = ?";
        $this->setQuery($sql);
        return $this->loadRow(array(trim($ten_loai_san_pham)));
    }
//    public function  Them_loai_san_pham($ID,$ten_loai_san_pham,$mo_ta,$ID_cha)
//    {
//        $sql ="insert into loai_san_pham values(?,?,?,?)";
//        $this->setQuery($sql);
//        return $this->execute(array($ID,$ten_loai_san_pham,$mo_ta,$ID_cha));
//    }
    public function  Edit_Categoty($ID,$ten_loai_san_pham,$trang_thai)
    {
        $sql="update loai_san_pham set ten_loai_san_pham=?,trang_thai=? Where ID=?";
        $this->setQuery($sql);
        return $this->execute(array($ten_loai_san_pham,$trang_thai,$ID));
    }
//
//
    public function Delete_category($ID){

        $sql = "delete from loai_san_pham where ID = ?";
        $this->setQuery($sql);
        return $this->execute(array($ID));
    }
//    public function Doc_ID_san_pham_theo_ID_cha($ID_cha=0)
//    {
//        $sql = "select ID,ten_loai_san_pham from loai_san_pham where ID_cha = ?";
//        $this->setQuery($sql);
//        return $this->loadAllRows(array($ID_cha));
//    }
}
?>