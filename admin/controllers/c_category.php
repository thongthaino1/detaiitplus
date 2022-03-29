<?php
include_once 'check_login.php';
include ("models/m_category.php");
echo "<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>";
//include ("models/m_couse.php");
class C_category
{
    function show_category()
    {
        $title = "Loại sản phẩm";
        $m_category = new M_category();
        $categorys = $m_category->read_category();
        $view = 'view/v_category/v_category.php';
        include('templates/layouts.php');
// View
    }
    function add_category()
    {
        // Models

        $m_category =new M_category();
        $categorys = $m_category->read_category();

        // <!--ma_loai, ten_loai, mo_ta, hinh-->
        if(isset($_POST["btnSave"]))
        {

            // $ma_loai = $_POST["ma_loai"];

            $ten_loai=preg_replace('!\s+!', ' ', $_POST["ten_loai"]);
            $m_category=new M_category();
            $kq=$m_category->return_category_by_name($ten_loai);

            // $mo_ta=$_POST["mo_ta"];
            //  $ma_loai_cha = $_POST["ma_loai_cha"];
            if ($kq->KQ>0)
            {
                echo "<script>alert('Tên danh mục đã bị trùng!');
                        window.location='category.php';</script>";
            }
            else {
                //  print_r($loai_san_phams);
                $kq = $m_category->add_category(null, $ten_loai, 1);
                var_dump($kq);
                if ($kq) {
                    echo '<script>swal("Good job!", "Thêm thành công!", "success").then(()=>{window.location=\'category.php\'});</script>';



                } else {
                    echo '<script> swal("Failed!", "Thêm thất bại!", "error");</script>';


                }
            }

        }

        $title = "Thêm loại sản phẩm";
        $view = 'view/v_category/v_addcategory.php';
        include('templates/layouts.php');

    }
    function Edit_category()
    {
        // Models
        if(isset($_GET["ma_loai"]))
        {

            $ma_loai=$_GET["ma_loai"];
            $m_category=new M_category();
            $category =$m_category->Read_category_by_id($ma_loai);
            // Cập nhật


            if(isset($_POST["btnSave"]))
            {

                $ten_loai=$_POST["ten_loai"];
                $status = $_POST["trang_thai"];



                $m_category=new M_category();

                $kq =  $m_category->Edit_Categoty($ma_loai,$ten_loai, $status);
                if($kq)
                {
                    echo '<script>swal("Good job!", "Cập nhật thành công!", "success").then(()=>{window.location=\'category.php\'});</script>';
                }
                else
                {
                    echo '<script> swal("Failed!", "Cập nhật không thành công!", "error");</script>';
                }

            }
            // End Cập nhật



            // View
            $title = "Cập nhật loại sản phẩm";
            $view = 'view/v_category/v_editcategory.php';
            include('templates/layouts.php');

        }


    }
    function  delete_category()
    {
        echo '<script>swal("Failed!", "Xóa không thành công !", "error");</script>';
        if(isset($_GET["ma_loai"])) {
            $ma_loai = $_GET["ma_loai"];
            $m_category = new M_category();
            $m_couse = new M_couse();
            $couses = $m_couse->read_couse_by_category($ma_loai);
            if (count($couses) > 0) {
                echo '<script>swal("Failed!", "Xóa không thành công !", "error");</script>';
                echo "<script>window.location='category.php'</script>";
            }
            else {
                $kq = $m_category->Delete_category($ma_loai);
                echo '<script>swal("Good job!", "Xóa thành công!", "success");</script>';
                echo "<script>window.location='category.php'</script>";


            }

        }

    }

}
?>