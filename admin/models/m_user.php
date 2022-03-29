<?php
require_once ("database.php");
class m_user extends database{

    public function takeUserbyId($username ,$password){
        $sql = "SELECT * FROM nguoi_dung where ten_dang_nhap = ? AND mat_khau = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($username,md5($password)));

    }
    public function changePassRequire($email){
        $sql = "SELECT * FROM nguoi_dung where email = ? ";
        $this->setQuery($sql);
        return $this->loadRow(array($email));
    }
    public function changePass($email){
        $sql = "SELECT * FROM nguoi_dung where ten_dang_nhap = ? ";
        $this->setQuery($sql);
        return $this->loadRow(array($email));
    }



}



