<?php
include_once 'check_login.php';
echo "<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>";
class c_home
{
    public function index(){
        $title = "Trang chủ";
        $view= "view/v_home/v_home.php";
        include_once "templates/layouts.php";
    }
    public function show_chart()
    {
        // Model
//        include_once("models/m_oder.php");
//        $m_oder=new M_oder();
//        $hoa_
//        $thang=array();don=$m_oder->statistic_oder();
//        $ct = $m_oder->count_teacher();
//        $cc = $m_oder->count_couse();
//        $cs = $m_oder->count_students();
//        $kq = $m_oder->count_studentresgitertoday();
//        $tong=array();

//        foreach($hoa_don as $hd)
//        {
//            $thang[]=$hd->ThangNam;
//            $tong[]=(float)$hd->tong;
//
//        }

//        $arr= array(
//            "labels"=>$thang,
//            "datasets"=>array(
//                array(
//                    "label"=>"Doanh thu theo tháng năm ",
//                    "borderColor"=>"#F00",
//                    "backgroundColor"=>"#FF9",
//                    "fillColor"=>"rgba(172,194,132,0.4)",
//                    "strokeColor"=>"#ACC26D",
//                    "pointBorderColor"=>"#0C0",
//                    "pointStrokeColor"=>"#9DB86D",
//                    "pointBorderWidth" => 1,
//                    "pointHoverRadius"=>5,
//                    "pointHoverBorderWidth"=>3,
//                    "pointRadius"=>5,
//                    "pointHitRadius"=>10,
//                    "data"=>$tong
//                )
//            )
//        );
//        $strJSON=json_encode($arr);
        // View
        $title = "Thống kê";
        $view = "view/v_home/v_chart.php";
        include_once "templates/layouts.php";


    }

}
