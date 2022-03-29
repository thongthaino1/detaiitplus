<div class="page-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary btn-sm" onclick="window.open('updateCoupon.php')"
                            value="">Thêm mới
                    </button>

                    <!--                   --><? //= var_dump($accountTypes)?>

                    <!---->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                </div>
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                        <div class="card-body">

                            <h5 class="card-title">Quản lý khuyến mãi</h5>

                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>

                                        <th>Tên khuyến mãi</th>
                                        <th >Discount(%)</th>
                                        <th >Ngày bắt đầu</th>
                                        <th>Ngày kết thúc</th>
                                        <th >Trạng thái</th>
                                        <th style="width: 200px">Hành động</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($list as $coupon) {
                                        ?>
                                        <tr>

                                            <!--                                            <td><a href="couse.php?ma_loai=--><?php //echo $ct->ma_loai?><!--">--><?php //echo $ct->ten_loai;?><!--</a></td>-->

                                            <td><?= $coupon->ten_khuyen_mai?></td>
                                            <td><?=$coupon->phan_tram_giam_gia?></td>
                                            <td><?=  date("d-m-Y",strtotime($coupon->ngay_bat_dau))   ?></td>
                                            <td><?=  date("d-m-Y",strtotime($coupon->ngay_ket_thuc)) ?></td>

                                            <td><span style="margin-right: 15%;"
                                                      class="badge badge-pill badge-<?php if($coupon->trang_thai==0)
                                                      {
                                                          echo "danger";
                                                      }
                                                      else
                                                      {
                                                          echo "info";
                                                      }

                                                      ?>
                            float-right"><?php if($coupon->trang_thai==1)
                                                    {
                                                        echo "kích hoạt";
                                                    }
                                                    else
                                                    {
                                                        echo "không kích hoạt";
                                                    }?></span>
                                            </td>
                                            <td>
                                                <button type="submit" id="sua_loai" class="btn btn-info" onclick="window.location.href='updateCoupon.php?id=<?php echo $coupon->ma_khuyen_mai?>'">Sửa</button>
                                                <button type="button" class="btn btn-danger" onclick="deleteCoupon(<?php echo $coupon->ma_khuyen_mai?>)">Xóa</button>
                                                <button type="button" class="btn btn-orange" onclick="sendMail(<?php echo $coupon->ma_khuyen_mai?>)">Gửi mail khuyến mãi</button>

                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>

                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
            All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
