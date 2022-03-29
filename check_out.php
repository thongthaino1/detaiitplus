<?php
include_once "controller/c_checkout.php";
if(isset($_SESSION["user"])){
    $c_checkout = new c_checkout();
    $c_checkout->charge();
    $c_checkout->addBill();
    $c_checkout->showCheckOut();
}
else{
    echo "<script>window.location = 'login.php'</script>";
}


