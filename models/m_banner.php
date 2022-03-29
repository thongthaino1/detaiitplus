<?php
require_once ("database.php");
class m_banner extends database{
    public function selectAll($vt=-1,$limit=-1){
        $sql = "Select * from tieu_de ";
        if($vt>=0 && $limit>=0)
        {
            $sql .= " limit ".$vt.",".$limit;
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function selectbyID($string,$vt=-1,$limit=-1){
        $sql = "Select * from tieu_de WHERE ma_tieu_de IN ($string)";
        if($vt>=0 && $limit>=0)
        {
            $sql .= " limit ".$vt.",".$limit;
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function selectOne($id){

        $sql = "Select * from tieu_de where ma_tieu_de = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

}