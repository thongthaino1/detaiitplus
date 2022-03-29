
<?php
if(isset($_SESSION['error']))
{
    echo '<script>swal("Lỗi!","'.$_SESSION["error"].'", "error").then(()=>{});</script>';
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
                        <li>Quên mật khẩu</li>
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
                                <label style="width: 400px;">Email <span style="color: red">(*):</span></label>
                                <input required type="email" name = "email" autocomplete="off" style="width: 700px;" placeholder="Nhập email của bạn">
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
