<?php
include_once 'check_login.php';
include_once("models/m_coupon.php");
echo "<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>";
class c_coupon
{
    public function show()
    {
        $m_coupon = new m_coupon();
        $list = $m_coupon->selectAll();
        $title = "Khuyến mãi";
        $view = "view/v_coupon/v_coupon.php";
        include_once "templates/layouts.php";


    }
    public function update()
    {

        $s_couponName = $s_status = $s_dateEnd = $s_dateStart = $s_discount = "";
        $m_coupon = new m_coupon();

        if (isset($_GET['id'])) {
            $s_id = $_GET['id'];
            $resultSelect = $m_coupon->selectOne($s_id);

            if ($resultSelect) {
                $s_id = $resultSelect->ma_khuyen_mai;
                $s_couponName = $resultSelect->ten_khuyen_mai;
                $s_status = $resultSelect->trang_thai;
                $s_dateEnd = $resultSelect->ngay_ket_thuc;
                $s_dateStart = $resultSelect->ngay_bat_dau;
                $s_discount = $resultSelect->phan_tram_giam_gia;;

            } else {
                $s_id = "";
            }


        }
        if (isset($_POST['submit'])) {
            $couponName = $_POST['coupon_name'] != "" ? $_POST['coupon_name'] : "";
            $status = $_POST['status'] != "" ? $_POST['status'] : "";
            $dateEnd =$_POST['date_end'] != "" ? $_POST['date_end'] : "";
            $dateStart = $_POST['date_start'] != "" ? $_POST['date_start'] : "";
            $discount =$_POST['discount'] != "" ? $_POST['discount'] : "1";


            if (!empty($s_id)) {
                $id = $_POST['ID'] != "" ? $_POST['ID'] : "";
                $resultUpdate = $m_coupon->update($couponName,$discount,$dateStart,$dateEnd,$status,$id);
                if ($resultUpdate) {
                    echo '<script>swal("Good job!", "Cập nhật thành công!", "success").then(()=>{window.location=\'coupon.php\'})</script>';
                } else {
                    echo '<script> swal("Good job!", "Cập nhật thất bại!", "error").then(()=>{window.location=\'coupon.php\'})</script>';

                }

//                  header("Location:banner.php");
//                var_dump($_SESSION['message']);
            } else {
                $resultInsert = $m_coupon->insert($couponName,$discount,$dateStart,$dateEnd,$status);
                if ($resultInsert) {
                    echo '<script>swal("Good job!", "Thêm thành công!", "success").then(()=>{window.location=\'coupon.php\'})</script>';
                } else {
                    echo '<script> swal("Good job!", "Thêm thất bại!", "error").then(()=>{window.location=\'coupon.php\'})</script>';

                }
//                header("Location:banner.php");
            }

        }
        $title = "Cập nhât khuyến mãi";
        $view = "view/v_coupon/v_add_coupon.php";
        include_once "templates/layouts.php";

    }
    public function delete()
    {
        $m_coupon = new m_coupon();
        $deletebanner = $m_coupon->delete();

        if ($deletebanner) {
            echo "Xóa thành công";
        } else {
            echo "Không xóa được";
            return;
        }
    }
//Helper::Gui_mail();


}
