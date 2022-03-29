<div class="page-wrapper">
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

                                    <th>Khách hàng</th>
                                    <th>Ngày lập</th>
                                    <th>Hình thức thanh toán</th>
                                    <th>Giá trị</th>
                                    <th>Ghi chú</th>
                                    <th>Tình trạng</th>
                                    <th>Thao tác</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $customer = new m_customer();
                                foreach ($list as $bill) {
                                    ?>
                                    <tr>

                                        <!--                                            <td><a href="couse.php?ma_loai=--><?php //echo $ct->ma_loai?><!--">--><?php //echo $ct->ten_loai;?><!--</a></td>-->
                                        <?php  $id  = $bill->ID_nguoi_dung;    ?>
                                        <td><a href='customer.php?id=<?= $id ?>'><?= $customer->selectOne($id)->ten_khach_hang	?></a></td>
                                        <td><?=$bill->ngay_lap?></td>
                                        <td><?=$bill->hinh_thuc_thanh_toan?></td>
                                        <td><?=$bill->tri_gia?></td>
                                        <td><?=$bill->ghi_chu?></td>
                                        <td><?=$bill->trang_thai?></td>
                                        <td>
                                            <button type="button" class="btn btn-success btn-sm"
                                                    onclick="window.open('order_details.php?id=<?= $bill->ID ?>')">
                                                Chi tiết
                                            </button>
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
