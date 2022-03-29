<?php
echo "<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>";
session_start();
include "models/m_product.php";
include "models/m_banner.php";
class c_home{
    public function index(){
        $m_banner = new m_banner();
        $banners = $m_banner->selectAll();
        $banner_main  = $m_banner->selectAll(0,4);
        $products = "";
        $m_product  = new m_product();
    $products = $m_product->showAllProducts();
    $types  = $m_product->showAllTypes();

        $computer = $m_product->showProductFilterbyType(3,"",0,6);//maytinh :uu dai ,noi bat ,ban chay ,moi nhập
        $computer1 = $m_product->showProductFilterbyType(3,"luot_xem",0,9);
        $computer2 = $m_product->showProductFilterbyType(3,"so_luong DESC");
        $computer3 = $m_product->showProductFilterbyType(3,"ngay_tao");

        $phone = $m_product->showProductFilterbyType(2,"",0,6);
        $phone1 = $m_product->showProductFilterbyType(2,"luot_xem",0,9);
        $phone2 = $m_product->showProductFilterbyType(2,"so_luong DESC");
        $phone3 = $m_product->showProductFilterbyType(2,"ngay_tao");

        $musix = $m_product->showProductFilterbyType(31,"",0,6);
        $musix1 = $m_product->showProductFilterbyType(31,"luot_xem",0,9);
        $musix2 = $m_product->showProductFilterbyType(31,"so_luong DESC");
        $musix3 = $m_product->showProductFilterbyType(31,"");



        $orther = $m_product->showProductFilterbyType(25,"",0,6);
        $orther1 = $m_product->showProductFilterbyType(25,"luot_xem",0,9);
        $orther2 = $m_product->showProductFilterbyType(25,"so_luong DESC");
        $orther3 = $m_product->showProductFilterbyType(25,"ngay_tao");

        $countBanners = count($banners);
        $IdBanner = [];
        foreach ($banners as $val)
        {
            $IdBannerArray[] = $val->ma_tieu_de;
        }
//        var_dump($IdBannerArray);
        function generateRandomBanners($length,$IdBannerArray)
        {
            $arr =[];
//            var_dump($IdBannerArray[0]);
            $IdBannerRandomArray = [];
            $countBanners = count($IdBannerArray);
            $i = 1;
            while($i <= $length)
            {
                $a = rand(0,$countBanners-1);
                if(!in_array($a,$arr))
                {
                    echo $a."     ";
                    $arr[] = $a;
                    $IdBannerRandomArray[] = $IdBannerArray[$a] ;
                    $i++;
                }
            }
            $randomIDstring =  implode(",",$IdBannerRandomArray);
            return $randomIDstring;
        }

        $randomIDstring = generateRandomBanners(3,$IdBannerArray);
        $banner_side = $m_banner->selectbyID($randomIDstring);
        $randomIDstring = generateRandomBanners(2,$IdBannerArray);
        $banner_thumb = $m_banner->selectbyID($randomIDstring);
        $randomIDstring = generateRandomBanners(3,$IdBannerArray);
        $banner_thumb1 = $m_banner->selectbyID($randomIDstring);

//        echo "<pre>";th
//        var_dump($banner_random);
        $title = "Trang chủ";
        $view = "views/home/v_home.php";
    require_once "templates/home/layouts.php";
    }
    public function index2(){
        if(isset($_COOKIE['cart'])) {
            $json = $_COOKIE['cart'];
            $cart = json_decode($_COOKIE['cart'], true);
        }

        $max_page = 1;
        $search = "";
        if(isset($_GET['page'])) {
            $page = $_GET['page'];
        }
        else{
            $page  = 1;
        }
        $m_product  = new m_product();
        $types = $m_product->showAllTypes();
        $start = ($page-1)*MAX_NUMBER;
        $sql  = "SELECT * FROM san_pham";
        $search = getGET("search");
        $type = getGET("type");
        $orderby = getGET("orderby");
        $minPrice = 1000;
        $maxPrice = 50000000;
        $filterPrice = getGET("filterPrice");
        $filterPrice = explode("-",$filterPrice);
        if(isset($filterPrice[0]))
            $minPrice = $filterPrice[0];
        if(isset($filterPrice[1]))
            $maxPrice = $filterPrice[1];

        var_dump($filterPrice);
        if(!empty($search)) {
             $sql .= " WHERE ten_san_pham like '%" .$search . "%'";
            if (!empty($type)) {
                $sql .= " AND id_loai_san_pham = " . $type;
            }

            if (count($filterPrice) == 2) {
                $sql .= " AND don_gia BETWEEN ".$minPrice." AND ".$maxPrice;
            }
            if (!empty($orderby)) {
                $sql .= " ORDER BY ".$orderby;
            }
        }
        else if(!empty($type))
        {
            $sql .= " WHERE id_loai_san_pham = " . $_GET['type'];
            if (count($filterPrice) == 2) {
                $sql .= " AND  don_gia BETWEEN ".$minPrice." AND ".$maxPrice;
            }
            if (!empty($orderby)) {
                $sql .= " ORDER BY ".$orderby;
            }

        }
        else if (!empty($orderby)) {
            if (count($filterPrice) == 2) {
                $sql .= " WHERE don_gia BETWEEN ".$minPrice." AND ".$maxPrice;
            }
            $sql .= " ORDER BY ".$orderby;
        }
        var_dump($_GET);
        $products = $m_product->showProductFilter($sql);
        echo $sql;
//        var_dump($products);
        $count = count($products);
        $max_page =  $count / MAX_NUMBER;

        if($max_page == 0)
        {
            $max_page = 1;
        }
//        $products = $m_product->showAllProducts($start,MAX_NUMBER);
        $max_page = ceil($max_page);

        if($page <= 0 || $page > $max_page || !is_numeric($page))
        {
            header("Location:shop.php?page=1");
            die();
        }

        $title = "Mua sắm";
        $view = "views/shop/v_shop.php";
        require_once "templates/layouts.php";
    }
    public function show404page(){
        $view = "views/404page.php";
        require_once "templates/layouts.php";
    }

}
