<?php
include_once 'check_login.php';
include_once("models/m_product.php");
include_once("models/m_category.php");
echo "<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>";

class c_product
{
    public function show()
    {
        if (isset($_SESSION['message'])) {
            echo "<script type='text/javascript'> alert('" . $_SESSION['message'] . "'); </script>";
            unset($_SESSION['message']);
        }
        $m_product = new m_product();
        $list = $m_product->selectAll();
        $m_category = new M_category();
        $types = $m_category->Read_category();
        $id_loai = "";
        if (isset($_GET['ma_loai_san_pham'])) {
            $id_loai = $_GET['ma_loai_san_pham'];
            if (!empty($id_loai))
                $list = $m_product->selectByCategory($id_loai);
        }
        $title = "Sản phẩm";
        $view = "view/v_product/v_product.php";
        include_once "templates/layouts.php";
    }

    public function update()
    {
        $s_typeID = $s_name = $s_price = $s_desc = $s_amount = $s_img = $created_at = $views = "";
        $m_product = new m_product();
        $types = $m_product->selectAllType();

        if (isset($_GET['id'])) {
            $s_id = $_GET['id'];
            $resultSelect = $m_product->selectOne($s_id);

            if ($resultSelect) {
                $s_typeID = $resultSelect->ID_loai_san_pham;
                $s_name = $resultSelect->ten_san_pham;
                $s_price =$resultSelect->don_gia;
                $s_desc =$resultSelect->mo_ta;
                $s_amount =$resultSelect->so_luong;
                $s_img =$resultSelect->hinh_san_pham;

            } else {
                $s_id = "";
            }


        }
        if (isset($_POST['submit'])) {
            $typeID = $_POST['typeID'] != "" ? $_POST['typeID'] : "";
            $name = $_POST['name'] != "" ? $_POST['name'] : "";
            $price = $_POST['price'] != "" ? $_POST['price'] : "";
            $desc = $_POST['desc'] != "" ? $_POST['desc'] : "";
            $amount = $_POST['amount'] != "" ? $_POST['amount'] : "";
            $img = ($_FILES['img']['error'] == 0) ? $_FILES["img"]['name'] : "";
            $created_at = $_POST['created_at'] != "" ? $_POST['created_at'] : "";
            $views = $_POST['view'] != "" ? $_POST['view'] : "";
            
            
            if (!empty($s_id)) {
                $ID = $_POST['id'] != "" ? $_POST['id'] : "";
                if (!empty($img)) {

                    $resultUpdate = $m_product->update($typeID,$name,$img,$price,$desc,$amount,$ID);
                } else {
                    $resultUpdate = $m_product->update($typeID,$name,$s_img,$price,$desc,$amount,$ID);
                }

                if ($resultUpdate) {
                    if ($img != "") {
                        move_uploaded_file($_FILES['img']['tmp_name'], "../public/image/$img");
                    }
                    echo '<script>swal("Good job!", "Cập nhật thành công!", "success").then(()=>{window.location = "products.php"})</script>';


                } else {
                    echo '<script> swal("Failed!", "Cập nhật thất bại!", "error")</script>';

                }
//

            } else {
                $resultInsert = $m_product->insert($typeID,$name,$img,$price,$desc,$amount,$created_at,$views);
                if ($resultInsert) {
                    if ($img != "")
                        move_uploaded_file($_FILES['img']['tmp_name'], "../public/image/$img");
                    echo '<script>swal("Good job!", "Thêm thành công!", "success").then(()=>{window.location = "products.php"})</script>';
                } else {
                    echo '<script> swal("Good job!", "Thêm thất bại!", "error");</script>';
                    return;
                }
//                header("Location:.php");
            }

        }
        $title = "Cập nhât sản phẩm";
        $view = "view/v_product/v_add_product.php";
        include_once "templates/layouts.php";
    }

    public function delete()
    {
        $m_product = new m_product();
        $delete = $m_product->delete();

        if ($delete) {
            echo "Xóa thành công";
        } else {
            echo "Không xóa được";
            return;
        }
    }


}

