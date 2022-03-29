<?php
require_once ("database.php");
class m_user extends database{
    public function checkAvailableUser($username)
    {
        $sql = "SELECT * FROM nguoi_dung where ten_dang_nhap = ? ";
        $this->setQuery($sql);
        return $this->loadRow(array($username));

    }
    public function takeUserbyId($username ,$password){
        $sql = "SELECT * FROM nguoi_dung where ten_dang_nhap = ? AND mat_khau = ? AND active = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($username,md5($password),1));
    }
    public function takeUserbyEmail($email){
        $sql = "SELECT * FROM nguoi_dung where email = ? AND active = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($email,1));
    }
    public function registerUser($username ,$password,$email,$date_register){
        $sql = "INSERT INTO nguoi_dung (ID_loai_nguoi_dung,ten_dang_nhap,mat_khau,ngay_dang_ky,active) 
VALUES (?,?,?,?,?);";
        $this->setQuery($sql);
         $registerUser = $this->execute(array(2,$username,md5($password),$date_register,1));
         return $registerUser;
    }
    public function takeUserInfobyId($id){
        $sql = "SELECT * FROM khach_hang where ID_nguoi_dung = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));

    }
    public function insertUserInfo($id ,$full_name,$address,$phone,$email){
        $sql = "INSERT INTO khach_hang (ID_nguoi_dung,ten_khach_hang,
dia_chi,so_dien_thoai,email)VALUES (?,?,?,?,?) ";
        $this->setQuery($sql);
        $user_info = $this->execute(array($id ,$full_name,$address,$phone,$email));
        return $user_info;
    }
    public function updateUserInfo($id ,$full_name,$address,$phone,$email){
    $sql = "UPDATE khach_hang SET ten_khach_hang = ?,
dia_chi = ?,so_dien_thoai = ? ,email =?  Where ID_nguoi_dung = ?  ";
    $this->setQuery($sql);
    echo $sql;
    echo $id ,$full_name,$address,$phone,$email;
    $user_info = $this->execute(array($full_name,$address,$phone,$email,$id ));
    return $user_info;
}
    public function updatePassword($email,$pass)
    {
        $sql = "UPDATE nguoi_dung SET  mat_khau = ? WHERE email = ?";
        $this->setQuery($sql);
        return $this->loadRow(array(md5($pass),$email));

    }

}



