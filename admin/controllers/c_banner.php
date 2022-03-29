<?php
include_once 'check_login.php';
include_once("models/m_banner.php");
echo "<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>";

class c_banner
{
    public function show()
    {

        if (isset($_SESSION['message'])) {
            echo '<script>swal("Thành công!", ' . $_SESSION["message"] .', "success");</script>';
            //to not make the error message appear again after refresh:
            unset($_SESSION['message']);
        }
        $m_banner = new m_banner();
        $list = $m_banner->selectAll();
        $title = "Tiêu đề";
        $view = "view/v_banner/v_banner.php";
        include_once "templates/layouts.php";


    }
    public function update()
    {
        $s_hinh_anh = $s_ten_tieu_de = $s_trang_thai = $s_id = "";
        $m_banner = new m_banner();
        echo '<script> swal("Failed!", "Thêm thất bại!", "error");</script>';

        if (isset($_GET['id'])) {
            $s_id = $_GET['id'];
            $resultSelect = $m_banner->selectOne($s_id);

            if ($resultSelect) {
                $s_id = $resultSelect->ma_tieu_de;
                $s_ten_tieu_de = $resultSelect->ten_tieu_de;
                $s_hinh_anh = $resultSelect->hinh;
                $s_trang_thai = $resultSelect->trang_thai;

            } else {
                $s_id = "";
            }


        }
            if (isset($_POST['submit'])) {

                $ten_tieu_de = $_POST['ten_tieu_de'] != "" ? $_POST['ten_tieu_de'] : "";
                $hinh_anh = ($_FILES['hinh_anh']['error'] == 0) ? $_FILES["hinh_anh"]['name'] : "";
                $status = ($_POST['trang_thai'] != "") ? $_POST['trang_thai'] : "1";

                if (!empty($s_id)) {
                    $id = $_POST['id'] != "" ? $_POST['id'] : "";
                    if (!empty($hinh_anh)) {

                        $resultUpdate = $m_banner->update($ten_tieu_de, $hinh_anh, $status, $s_id);
                    } else {
                        $resultUpdate = $m_banner->update($ten_tieu_de, $s_hinh_anh, $status, $s_id);
                    }
                    if ($resultUpdate) {
                        if ($hinh_anh != "") {
                            move_uploaded_file($_FILES['hinh_anh']['tmp_name'], "../public/image/banner/$hinh_anh");
                        } else {
                            $hinh_anh = "default.jpg";
                            move_uploaded_file($_FILES['hinh_anh']['tmp_name'], "../public/image/banner/$hinh_anh");
                        }
                        echo '<script>swal("Good job!", "Cập nhật thành công!", "success").then(()=>{window.location = "banner.php"});</script>';
                    } else {
                        echo '<script> swal("Failed!", "Cập nhật thất bại!", "error");</script>';
                        return;
                    }
                }
            else {
                    if($hinh_anh == "")
                    {
                        $hinh_anh = "default.jpg";
                    }
                    $resultInsert = $m_banner->insert($ten_tieu_de, $hinh_anh, $status);

                    if ($resultInsert) {
                        if ($hinh_anh != "")
                            move_uploaded_file($_FILES['hinh_anh']['tmp_name'], "../public/image/banner/$hinh_anh");
                        echo '<script>swal("Good job!", "Thêm thành công!", "success").then(()=>{window.location = "banner.php"});</script>';

                    } else {
                        echo '<script> swal("Failed!", "Thêm thất bại!", "error");</script>';


                        return;
                    }
//                header("Location:banner.php");
                }

            }
        $title = "Cập nhât tiêu đề";
        $view = "view/v_banner/v_addbanner.php";
        include_once "templates/layouts.php";

    }
      public function delete()
    {
        $m_banner = new m_banner();
        $deletebanner = $m_banner->delete();

        if ($deletebanner) {
            echo "Xóa thành công";
        } else {
            echo "Không xóa được";
            return;
        }
    }


}
