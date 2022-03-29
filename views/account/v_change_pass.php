
<?php
if(isset($_SESSION['error']))
{
    echo '<script>swal("Lỗi!","'.$_SESSION["error"].'", "error").then(()=>{return;});</script>';
    unset($_SESSION['error']);
}
?>

<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.php">Trang chủ</a></li>
                        <li>Đổi mật khẩu</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!-- customer login start -->
<div class="login_page_bg">
    <div class="container">
        <div class="customer_login">
            <div class="row">
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form login">
                        <h2>login</h2>
                        <form action="" method="post">
                            <p>
                                <label>Mật khẩu hiện tại<span>*</span></label>
                                <input type="password" name ="password" required>
                            </p><p>
                                <label>Mật khẩu mới<span>*</span></label>
                                <input type="password" name ="newpass" required>
                            </p>
                            <p>
                                <label>Nhập lại mật khẩu mới<span>*</span></label>
                                <input type="password" name ="renewpass" required>
                            </p>
                            <div class="login_submit">
                                <button type="submit" name="submit">Xác nhận</button>

                            </div>

                        </form>
                    </div>
                </div>
                <!--login area start-->

                <!--register area start-->
                <!--register area end-->
            </div>
        </div>
    </div>
</div>
