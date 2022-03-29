<?php
session_start();
if (isset($_POST['pass'])) {
    $user = $_SESSION['user'];
    $pass = $_POST['pass'];


//    echo $pass;
    $pass = md5($pass);
    if ($pass == $user->mat_khau) {
//        echo "success";
        $arr = ['status'=>'success',"nyti"=>'ádasdk'];
    } else {
//        echo "fail";
        $arr = ['status'=>'fail',"nyti"=>'ádasdk'];
    }

    echo json_encode($arr);








}