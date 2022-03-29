<?php
DEFINE("MAX_NUMBER",12);
require_once("database.php");

class m_product extends database
{

    public function showAllProducts($vt = -1, $limit = -1)
    {
        $sql = "Select * from san_pham";
        if ($vt >= 0 && $limit >= 0 ) {
            $sql .= " limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function showProductFilter($sql = "Select * from san_pham",$vt = -1, $limit = -1)
    {
        if ($vt >= 0 && $limit >= 0 ) {
            $sql .= " limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function showProductFilterbyType($id_loai,$orderby,$vt = -1, $limit = -1)
    {
        $sql = "Select * from san_pham WHERE id_loai_san_pham = ".$id_loai;
        if(!empty($orderby))
        {
            $sql .= " ORDER BY ".$orderby;
        }
        if ($vt >= 0 && $limit >= 0 ) {
            $sql .= " limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function showProduct($id)
    {
        $sql = "UPDATE san_pham set luot_xem = luot_xem+1 WHERE id = ".$id;
        $this->setQuery($sql);
        $this->execute();
        $sql = "SELECT * FROM san_pham WHERE ID = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function showProductById($ID=[]){
        $sql = "SELECT * FROM san_pham WHERE ID = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ID['ID_san_pham']));
    }
    public function showProductbyType($id_type)
    {
        $sql = "SELECT * FROM san_pham WHERE ID_loai_san_pham = ".$id_type;
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function showType($id_loai)
    {
        $sql = "SELECT * FROM loai_san_pham WHERE ID = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id_loai));
    }
    public function showAllTypes()
    {
        $sql = "SELECT * FROM loai_san_pham ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function updateQuantity($update = [],$qty){
        $sql = "update san_pham set so_luong =?  Where ID= ?";
        $this->setQuery($sql);
        return $this->execute(array($qty,$update['ID_san_pham']));
    }

}
//
//
//}
//

