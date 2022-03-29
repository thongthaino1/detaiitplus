<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.php">Trang chủ</a></li>
                        <li>Thanh toán</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--Checkout page section-->
<div class="checkout_page_bg">
    <div class="container">
        <div class="Checkout_section">
            <div class="checkout_form">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="checkout_form_left">
                            <!--                                <form action="" method="post" name ="formUserInfo" id="submit-form-customer">-->
                            <form method="post" id="submit-form-cart" action="">
                                <h3>Thông tin khách hàng</h3>
                                <div class="row" >
                                    <div class="col-lg-6 mb-20">
                                        <label>Họ và tên<span>*</span></label>
                                        <input required type="text" name="ten_khach_hang" id="ten_khach_hang" value="<?php echo (isset($customer->ten_khach_hang))?$customer->ten_khach_hang:''?>">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label>Giới tính<span>*</span></label>
                                        <select class="niceselect_option " name="gioi_tinh" id="gioi_tinh">
                                            <option value="0" <?php echo ($customer->gioi_tinh == 0)?'selected':''?> >Chưa có giới tính</option>
                                            <option value="1" <?php echo ($customer->gioi_tinh == 1)?'selected':''?>>Nam</option>
                                            <option value="2" <?php echo ($customer->gioi_tinh == 2)?'selected':''?>>Nữ</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <label>Ngày Sinh<span>*</span></label>
                                        <input name = "ngay_sinh" id="ngay_sinh" type="date" required value="<?php echo (isset($customer->ngay_sinh))?$customer->ngay_sinh:''?>">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="country">Địa Chỉ<span>*</span></label>
                                        <input  required type="text" id="dia_chi" name="dia_chi" value="<?php echo (isset($customer->dia_chi))?$customer->dia_chi:''?>">
                                    </div>

                                    <div class="col-lg-6 mb-20">
                                        <label>Số điện thoại<span>*</span></label>
                                        <input name = "so_dien_thoai" id="so_dien_thoai" type="text" required value="<?php echo (isset($customer->so_dien_thoai))?"0".$customer->so_dien_thoai:''?>">
                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <label> Email <span>*</span></label>
                                        <input type="email" id="email" name = "email" required value="<?php echo (isset($customer->email))?$customer->email:''?>">
                                    </div>
                                    <input type="hidden" name="id_nguoi_dung" value="<?php echo $customer->ID_nguoi_dung ?>">
                                    <!--                                        <div class="order_button">-->
                                    <!--                                            <button name="btn_update_customer" id="btn_update_customer">Cập nhật thông tin </button>-->
                                    <!--                                        </div>-->
                                </div>
                                <!--                                </form>-->
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="checkout_form_right">
                            <!--                                <form method="post" id="submit-form-cart" action="">-->
                            <h3>Chi tiết đơn hàng</h3>
                            <div class="order_table table-responsive">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th>Tổng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <input type="hidden" name="id_nguoi_dung" value="<?php echo $user->ID ?>">
                                    <input type="hidden" name="tong_tien" value="<?php echo $tong; ?>">
                                    <?php

                                    foreach ($cartList as $item)
                                    {
                                        for ($i = 0; $i < count($cart); $i++) {
                                            if ($item->ID == $cart[$i]['id']) {
                                                $qty = $cart[$i]['num'];
                                                break;
                                            }

                                        }
                                        echo '<tr>
                                                <td><a href="product_details.php?id='.$item->ID.'">'.$item->ten_san_pham.'</a><strong> × '.$qty.'</strong></td>
                                                <td> '.  number_format($qty * $item->don_gia,
                                                0,',','.').'</td>
                                            </tr>';
                                        ?>
                                        <input type="hidden" name="id_san_pham[]" value="<?php echo $item->ID ?>">
                                        <input type="hidden" name="so_luong[]" value="<?php echo $qty ?>">
                                        <input type="hidden" name="thanh_tien[]" value="<?php echo $qty * $item->don_gia ?>">

                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                    <tfoot>
                                    <tr class="order_total">
                                        <th>Tổng tiền</th>
                                        <td><strong><?= number_format($tong, 0,',','.') ?></strong>
                                            <input type="hidden" id = "txt_tong_tien" name="txt_tong_tien" value="<?= $tong ?>">
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="col-12">
                                <div class="order-notes">
                                    <label for="order_note">Ghi chú cho shop</label>
                                    <textarea name="ghi_chu" id="ghi_chu"></textarea>
                                </div>
                            </div>
                            <input type='hidden' id='hinhthuc' name='hinh_thuc_thanh_toan' value='Trực tiếp'>

                            <div class="payment_method m-2">
                                <ul class="nav nav-tabs m-2" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a  class="nav-link doanh-change-hinhthuc show active" id="#" data-value="Trực tiếp" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Thanh toán trực tiếp</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link doanh-change-hinhthuc" id="#" data-value="Chuyển khoản" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Chuyển khoản</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link doanh-change-hinhthuc" id="#" data-value="Thanh toán online" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Thanh toán online</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <label>Địa chỉ shop :  123 Trần Phú, Hà Đông, Thành Phố Hà Nội</label>
                                    </div>
                                    <div class="tab-pane fade " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <label>Công ty tin học DT - stk: 123456789789 - Ngân hàng BIDV</label>
                                    </div>
                                    <div class="tab-pane fade " id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        <div >
                                            <input type="hidden" name="id_tai_khoan" value="<?php  $user->ID ?>">
                                            <input type="hidden" id="stripeToken" name="stripeToken" />
                                            <input type="hidden" id="stripeEmail" name="stripeEmail" />
                                            <input type="hidden" id="amountInCents" name="amountInCents" />
                                            <input type="hidden" name="txtDiscount" class="txtDiscount" value=""/></br>

                                            <img src="public/assets/img/icon/papyel.png" alt="">
                                            <div class="order_button">
                                                <button type="button" id="btn_check_out_paypal" name="btn_check_out_paypal">Thanh Toán Stripe</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="order_button mdi-24px m-2">
                                <button  id="btn_check_out" name="btn_check_out" >Đặt Hàng</button>
                                <input type="hidden" value="1" name="type-payment" id="type-payment" />
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Checkout page section end-->
<script src="https://checkout.stripe.com/checkout.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    var handler = StripeCheckout.configure({
        key: 'pk_test_RktRYcffDgayxWK6b7Gho9Ol',
        image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
        token: function(token) {
            $("#stripeToken").val(token.id);
            $("#stripeEmail").val(token.email);
            $("#amountInCents").val(Math.floor($("#amountInDollars").val() * 100));
            $("#submit-form-cart").submit();
        }
    });
    $(window).on('popstate', function() {
        handler.close();
    });

    $("#btn_check_out_paypal").click(function(e) {
        let moneyStripe = 0;
        let moneyInput = $("#txt_tong_tien").val();
        let money = (moneyInput / 23000).toFixed(2);
        // let discount = +$(".txtDiscount").val();
        //
        // if(discount != 0) {
        //     moneyStripe = discount / 200;
        // }
        // else {
        //     moneyStripe = money / 200;
        // }
        var amountInCents = Math.floor(moneyStripe);
        var displayAmount = parseFloat(Math.floor(moneyStripe)).toFixed(2);
        // console.log(123);
        handler.open({
            name: 'Antomi Store',
            description: 'Custom amount ($' + money + ')',
            amount: amountInCents,
        });
    });
</script>
<script>
    $('#myTab a').on('click', function (e) {
        e.preventDefault()
        $(this).tab('show')
    });
    $("#btn_check_out").on('click',function(e) {
        var ten_khach_hang = $("#ten_khach_hang").val();
        var ngay_sinh = $("#ngay_sinh").val();
        var so_dien_thoai = $("#so_dien_thoai").val();
        var gioi_tinh = $("#gioi_tinh").val();
        var email = $("#email").val();
        var dia_chi = $("#dia_chi").val();
        // var ghi_chu = $("#ghi_chu").val();
        if (ten_khach_hang == ""|| ngay_sinh == ""|| so_dien_thoai == ""|| gioi_tinh == 0|| email == ""|| dia_chi == "" ) {
            swal("Vui lòng cập nhật đầy đủ thông tin trước khi đặt hàng", "", "error");
            return false;
        }
        else {
            e.preventDefault();
            swal({
                title: "Đặt Hàng?",
                text: "Bạn có chắc chắn muốn đặt hàng ?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    swal({
                        title: "Đặt hàng thành công",
                        icon: "success",
                    }).then(()=>{
                        $("#submit-form-cart").submit();
                        <?php $_SESSION['btn_check_out'] = 2;
//                        setcookie('cart','',time()-1);
                        ?>
                    });
                }
                else {
                    swal("Đã hủy đặt hàng!");
                }
            });
        }
    });


    $(".doanh-change-hinhthuc").click(function() {
        let value = $(this).data("value");
        $("#hinhthuc").val(value);
        if (value=="Thanh toán online")
        {
            $("#contact").show();
            $("#btn_check_out").hide();
            return;
        }
        else {
            $("#btn_check_out").show();
            return;
        }
    });
</script>