<?php
require_once ("database.php");
class m_customer extends database{
    public function showCustomerById($id){
        $sql = "Select * from khach_hang WHERE ID_nguoi_dung = ? ";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function insertCustomer($id_nguoi_dung,$ten_khach_hang,$gioi_tinh,$ngay_sinh,$dia_chi,$so_dien_thoai,$email){
        $sql = "INSERT INTO khach_hang values(?,?,?,?,?,?,?,?) ";
        $this->setQuery($sql);
         $this->execute(array(null,$id_nguoi_dung,$ten_khach_hang,$gioi_tinh,$ngay_sinh,$dia_chi,$so_dien_thoai,$email));
        return $this->getLastItem();
    }
    public function updateCustomer($id_nguoi_dung,$ten_khach_hang,$gioi_tinh,$ngay_sinh,$dia_chi,$so_dien_thoai,$email){
        $sql = "UPDATE khach_hang SET ten_khach_hang = ?, gioi_tinh = ?, ngay_sinh = ?, dia_chi = ?, so_dien_thoai = ?, email = ? WHERE ID_nguoi_dung = ?";
        echo $sql;
        echo $ten_khach_hang,$gioi_tinh,$ngay_sinh,$dia_chi,$so_dien_thoai,$email,$id_nguoi_dung;
        $this->setQuery($sql);
        return $this->execute(array($ten_khach_hang,$gioi_tinh,$ngay_sinh,$dia_chi,$so_dien_thoai,$email,$id_nguoi_dung));
    }
}