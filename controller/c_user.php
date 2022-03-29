<?php
echo "<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>";
session_start();
include_once "models/m_user.php";
include_once "models/m_api.php";

class c_user
{
    public function check_login()
    {

        $user = $pass = "";
        if (isset($_POST['login'])) {
            if (isset($_POST['Username'])) {
                $user = $_POST['Username'];
            }
            if (isset($_POST['Password'])) {
                $pass = $_POST['Password'];
            }
            $this->saveLoginSession($user, $pass);
            if (isset($_SESSION['user'])) {
                $_SESSION['messege'] = "Đăng nhập thành công";

                if (isset($_COOKIE['cart'])) {
                    $json = $_COOKIE['cart'];
                    $cart = json_decode($json, true);
                    $api = new m_api();
                    $api->QueryFromCart($cart);
                }

                if(isset($_SESSION['old_page']))
                {
                    $a = $_SESSION['old_page'];
                    header("Location: $a");
                    unset( $_SESSION['old_page']);
                    die();
                }
                header('Location: shop.php');
                die();

            } else {
                $_SESSION['messege'] = "Sai thong tin dang nhap";
            }
        }

            $title = "Trang dăng nhập";
            $view = "views/v_login.php";
            require_once "templates/login/layouts.php";
            die();


    }

    public function saveLoginSession($user, $pass)
    {
        $m_user = new m_user();
        $user = $m_user->takeUserbyId($user, $pass);
        if (!empty($user)) {
            $_SESSION['user'] = $user;
        }

    }

    public function logout()
    {

        unset($_SESSION['user']);
        $_SESSION['messege'] = "Đăng xuất thành công";
        header('Location: login.php');
        die();

    }

    public function  register()
    {
        $user = $pass = $repass = $email = "";
        $error = "";
        $date_register = "";
        var_dump($_POST);
        if (isset($_POST['register'])) {
            if (isset($_POST['username'])) {
                $user = $_POST['username'];
            }
            if (isset($_POST['password'])) {
                $pass = $_POST['password'];
            }
            if (isset($_POST['repassword'])) {
                $repass = $_POST['repassword'];
            }
            if (isset($_POST['email'])) {
                $email = $_POST['email'];
            }
            $date_register  = date('Y-m-d');

                $m_user = new m_user();
                $userA = $m_user->checkAvailableUser($user);
//                if ($userA)
//                {
//                    $_SESSION['messege'] = "Đã có nguời dùng này,vui lòng đk lại ";
//                }else{
                    $user = $m_user->registerUser($user,$pass,$email,$date_register);
//                    $id = $m_user->getLastItem();
//                    var_dump($user);
//                    var_dump($id);

//                    $m_user->insertEmail($email,$id);
//                    if($user)
//                    {
//                        $_SESSION['messege'] = "Đăng ký thành công";
//                        header("Location:login.php");
//
//                        die();
//                    }
//                }

        }
        $title = "Đăng kí";
        $view = "views/v_register.php";
        include_once "templates/layouts.php";


    }
    public function  userProfile()
    {

        $view = "views/v_profile.php";
        include_once "templates/layouts.php";


    }
    public function  forgot_pass()
    {
        var_dump($_POST);
        echo 123;
        if(isset($_POST['submit']))
        {
            include_once "libs/Helper.php";
            $email = getPOST("email");
            $m_user = new m_user();
            $user = $m_user->takeUserbyEmail($email);
            if(empty($user))
            {
                $_SESSION['error'] = "Email không hợp lệ";
                header("Location:forgot_password.php");
                return;
            }
            $random =   generateRandomString(8);
            $_SESSION['randomCode'] = $random;
            $title = "Yêu cầu thay đổi mật khẩu";
            $content = "<p>Chúng tôi nhận được yêu cầu đổi mật khẩu từ bạn ,nếu không phải bạn hãy bỏ qua tin nhắn này</p> ";
            $content .= "<p>Mật khẩu mới của bạn là </p> ".$random;
            $bcc = $email;
            Helper::send($title,$content,$bcc);
            $m_user->updatePassword($email,$random);
            echo '<script>swal("Thành công!", "Gửi thành công !Vui lòng xác nhạn trong email", "success").then(()=>{window.location = "login.php"});</script>';
        }

        $title = "Quên mật khẩu";
        $view = "views/v_forgot_pass.php";
        include_once "templates/layouts.php";


    }
    public function  change_pass()
    {
        $user = $_SESSION['user'];
        $email = $user->email;
        var_dump($_POST);
        echo 123;
        if(isset($_POST['submit']))
        {
          $m_user = new m_user();
            $pass = getPOST("password");
            $newpass = getPOST("newpass");
            $renewpass = getPOST("renewpass");
            var_dump($newpass);
            var_dump($renewpass);
            if($newpass != $renewpass)
            {
                $_SESSION['error'] = "Mật khẩu mới không trùng khớp";
//                header("Location:change_pass.php");
                return;
            }
            if(!empty($pass))
            {
                $user = $m_user->takeUserbyId($user->ten_dang_nhap,$pass);
                if($user)
                {
                    $m_user->updatePassword($email,$newpass);
                    echo '<script>swal("Thành công!", "Đổi mật khẩu thành công ", "success").then(()=>{window.location = "index.php"});</script>';

                }else{
                    $_SESSION['error'] = "Mật khẩu không hợp lệ";
                }

            }
                  }
        $title = "Đổi mật khẩu";
        $view = "views/account/v_change_pass.php";
        include_once "templates/layouts.php";


    }

}
