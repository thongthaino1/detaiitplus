<?php
require_once ("database.php");
class m_order extends database{

    public function selectAll()
    {
        $sql = "Select * from hoa_don";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function selectBillByID($id)
    {
        $sql = "Select * from hoa_don where ID_loai_nguoi_dung = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }

    public function selectBillDetail($id){
        $sql = "Select * from ct_hoa_don where ID_hoa_don = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }
    public function selectOne($id){

        $sql = "Select * from nguoi_dung where ID = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    public function update($ten_tieu_de,$hinh_anh,$trang_thai,$id)
    {
        var_dump($ten_tieu_de,$hinh_anh,$trang_thai,$id); ;
        $sql = "UPDATE tieu_de set ten_tieu_de = ? , hinh = ?, trang_thai = ? where ma_tieu_de = ?";
        $this->setQuery($sql);
        return $this->execute(array($ten_tieu_de, $hinh_anh, $trang_thai,$id));

    }
    public function delete(){

        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $sql = 'delete from tieu_de where ma_tieu_de = ' . $id;
            $this->setQuery($sql);
            return $this->execute();

        }
    }
}