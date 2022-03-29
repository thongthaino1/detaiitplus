
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!--                    <button type="button" class="btn btn-primary btn-sm">Primary</button>-->
                        <!--                    <button type="button" class="btn btn-secondary btn-sm">Secondary</button>-->
                        <!--                    <button type="button" class="btn btn-success btn-sm">Success</button>-->
                        <!--                    <button type="button" class="btn btn-danger btn-sm">Danger</button>-->
                        <!--                    <button type="button" class="btn btn-warning btn-sm">Warning</button>-->
                        <!--                    <button type="button" class="btn btn-info btn-sm">Info</button>-->
                        <!--                    <button type="button" class="btn btn-light btn-sm">Light</button>-->
                        <!--                    <button type="button" class="btn btn-dark btn-sm">Dark</button>-->
                        <!--                    <button type="button" class="btn btn-link btn-sm">Link</button>-->
                        <button type="button" class="btn btn-primary btn-sm" onclick="window.open('addcategory.php')" value="">Thêm mới</button>

                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">


                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Basic Datatable</h5>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>

                                        <th>Tên loại</th>
                                        <th style="    width: 8%;">Tình trạng</th>
                                        <th style="width: 8%">Hành động</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($categorys as $ct) {
                                        ?>
                                        <tr>

                                            <td><a href="products.php?ma_loai_san_pham=<?php echo $ct->ID?>"><?php echo $ct->ten_loai_san_pham;?></a></td>
                                            <td><span style="margin-right: 15%;"
                                                          class="badge badge-pill badge-<?php if(!$ct->trang_thai)
                                                          {
                                                              echo "danger";
                                                          }
                                                          else
                                                          {
                                                              echo "info";
                                                          }

                                                          ?>
                            float-right"><?php if($ct->trang_thai)
                                                    {
                                                        echo "kích hoạt";
                                                    }
                                                    else
                                                    {
                                                        echo "chưa kích hoạt";
                                                    }?></span>
                                            </td>
                                            <td>
                                                <button type="submit" id="sua_loai" class="btn btn-info" onclick="window.location.href='editcategory.php?ma_loai=<?php echo $ct->ID?>'">Sửa</button>

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
