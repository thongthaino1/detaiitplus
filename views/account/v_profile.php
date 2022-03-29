<div class="account_page_bg">
    <div class="container">
        <section class="main_content_area">
            <div class="account_dashboard">
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <!-- Nav tabs -->
                        <div class="dashboard_tab_button">
                            <ul role="tablist" class="nav flex-column dashboard-list" id="nav-tab">
                                <li><a href="#dashboard" data-toggle="tab" class="nav-link active">Tổng quan</a></li>
                                <li> <a href="#orders" data-toggle="tab" class="nav-link">Đơn hàng</a></li>
                                <li><a href="#downloads" data-toggle="tab" class="nav-link">Downloads</a></li>
                                <li><a href="#address" data-toggle="tab" class="nav-link">Addresses</a></li>
                                <li><a id ="buttonAD" href="#account-details" data-toggle="tab" class="nav-link">Thông tin khách hàng</a></li>
                                <li><a href="login.html" class="nav-link">logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <!-- Tab panes -->
                        <div class="tab-content dashboard_content">
                            <div class="tab-pane fade show active" id="dashboard">
                                <h3>Dashboard </h3>
                                <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">Edit your password and account details.</a></p>
                            </div>
                            <div class="tab-pane fade" id="orders">
                                <h3>Đơn hàng</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Chi tiết</th>
                                            <th>Ngày đặt</th>
                                            <th>Tổng tiền</th>
                                            <th>Trạng thái</th>
                                            <th><a onclick="window.print()">In hóa đơn</a><h>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>May 10, 2018</td>
                                            <td><span class="success">Completed</span></td>
                                            <td>$25.00 for 1 item </td>
                                            <td><a href="cart.html" class="view">view</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>May 10, 2018</td>
                                            <td>Processing</td>
                                            <td>$17.00 for 1 item </td>
                                            <td><a href="cart.html" class="view">view</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="downloads">
                                <h3>Downloads</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Downloads</th>
                                            <th>Expires</th>
                                            <th>Download</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Shopnovilla - Free Real Estate PSD Template</td>
                                            <td>May 10, 2018</td>
                                            <td><span class="danger">Expired</span></td>
                                            <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                        </tr>
                                        <tr>
                                            <td>Organic - ecommerce html template</td>
                                            <td>Sep 11, 2018</td>
                                            <td>Never</td>
                                            <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="address">
                                <p>The following addresses will be used on the checkout page by default.</p>
                                <h4 class="billing-address">Billing address</h4>
                                <a href="#" class="view">Edit</a>
                                <p><strong>Bobby Jackson</strong></p>
                                <address>
                                    <span><strong>City:</strong> Seattle</span>,
                                    <br>
                                    <span><strong>State:</strong> Washington(WA)</span>,
                                    <br>
                                    <span><strong>ZIP:</strong> 98101</span>,
                                    <br>
                                    <span><strong>Country:</strong> USA</span>
                                </address>
                            </div>
                            <div class="tab-pane fade" id="account-details">
                                <h3>Thông tin khách hàng</h3>
                                <div class="login">
                                    <div class="login_form_container">
                                        <div class="account_login_form">
                                            <form action="#" method="post" id = "formProfile">
                                                <div class="input-radio">
                                                    <span class="custom-radio"><input aria-selected="true" type="radio" value="1" name="gender" <?= $gender == 1?"checked='true'":""  ?>> Nam</span>
                                                    <span class="custom-radio"><input type="radio" value="0" name="gender" <?= $gender == 0?"checked='true'":""  ?> > Nữ </span>
                                                </div> <br>
                                                <label>Họ tên khách hàng</label>
                                                <input type="text" name="name" value="<?=$name?>" required>
                                                <label>Địa chỉ</label>
                                                <input type="text" name="address" value="<?=$address?>" required>
                                                <label>Số điện thoại</label>
                                                <input type="text" name="phone"  value="<?=$phone?>" required>
                                                <label>Email</label>
                                                <input type="email" name="email" value="<?=$email?>" required>
                                                <label>Birthdate</label>
                                                <input type="date"  value="<?= $DoB  ?>" name="DoB" required>
                                                <?php if($customer)
                                                {
                                                    echo '<label>Password</label>
                                                <input type="password" name="password" id="password" required>';
                                                }?>
                                                <br>
                                                <span class="custom_checkbox">
                                                        <input type="checkbox" value="1" name="optin">
                                                        <label>Receive offers from our partners</label>
                                                    </span>
                                                <br>
                                                <span class="custom_checkbox">
                                                        <input type="checkbox" value="1" name="newsletter">
                                                        <label>Sign up for our newsletter<br><em>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</em></label>
                                                    </span>
                                                <div class="save_button primary_btn default_button">
                                                    <button type="submit" name ="submitProfile" id ="submitProfile">Save</button>
                                                    <input type="hidden" name ="submitProfile" id ="submitProfile">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<script>
            $("#submitProfile").click(function (e)
            {
                e.preventDefault();
                var pass = $("#password").val();
               $.post('api/checkPass.php',{
                   pass : pass
               },function (data)
               {
                   var objdata  = JSON.parse(data);
                    if(objdata.status == "success")
                    {
                        $("#submitProfile").val(1222);
                        $("#formProfile").submit();
                    }else{
                        swal("Mật khẩu không hợp lệ");
                        return;
                    }

               });
            })


</script>