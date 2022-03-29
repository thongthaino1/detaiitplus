<?php
require_once ("database.php");
class m_product extends database{
    public function insert($typeID,$name,$img,$price,$desc,$amount,$created_at,$views){
        $sql = "INSERT INTO  san_pham(ID_loai_san_pham,ten_san_pham,don_gia,mo_ta,so_luong,hinh_san_pham,ngay_tao,luot_xem)
 value (?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        $this->execute(array($typeID,$name,$price,$desc,$amount,$img,$created_at,$views));
        return $this->getLastId();
    }
    public function selectAll(){
        $sql = "Select * from san_pham ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function selectAllType(){
        $sql = "Select * from loai_san_pham WHERE trang_thai = 1 ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function selectOne($id){

        $sql = "Select * from san_pham where ID = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    public function selectByCategory($id){
        $sql = "Select * from san_pham where ID_loai_san_pham = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }
    public function update($typeID,$name,$img,$price,$desc,$amount,$ID)
    {
        $sql = "UPDATE san_pham set ID_loai_san_pham = ? ,ten_san_pham = ?,don_gia=?,mo_ta=?,so_luong=?,
        hinh_san_pham= ? where ID = ?";

        $this->setQuery($sql);
        return $this->execute(array($typeID,$name,$price,$desc,$amount,$img,$ID));

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