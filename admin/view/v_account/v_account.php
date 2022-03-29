<div class="page-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary btn-sm" onclick="window.open('form_basic.php')"
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


                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title m-b-0">Quản lý tài khoản</h5>
                                </div>

                                <form method="POST">
                                    <div style="text-align: center">

                                        <select class="select2 custom-select" style="width: 30%; height:36px;"
                                                name="accountType">
                                            <option value="">Chọn</option>

                                            <?php
                                            foreach ($accountTypes as $accountType) {
                                                $a = $accountType->ID;
                                                $flag = ($a == $id_loai) ? 'selected' : '';
                                                echo $flag;
                                                echo '<option value="' . $accountType->ID . '"' . $flag . '>' . $accountType->ten_loai_nguoi_dung . '</option>';

                                            }
                                            ?>
                                        </select>
                                        <button type="submit" class="btn btn-success" style="height: 2.4em;"
                                                name="btnTimKiem">Lọc
                                        </button>
                                    </div>
                                </form>
                                <table id="zero_config" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Họ tên</th>
                                        <th scope="col">Tên đăng nhập</th>
                                        <th scope="col">Email</th>
                                        <th>Ngày đăng ký</th>
                                        <th>Lần đăng nhập cuối</th>
                                        <th scope="col">Hoạt động</th>
                                        <th scope="col">Thao tác</th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                    <?php $count = 1;
                                    foreach ($list as $key => $value) {

                                        ?>


                                        <tr>

                                            <td width="5%"><?= $count++ ?></td>
                                            <td><?= $value->ho_ten ?></td>
                                            <td><?= $value->ten_dang_nhap ?></td>
                                            <td><?= $value->email ?></td>
                                            <td width="50px"><?= date("d-m-Y", strtotime($value->ngay_dang_ky)) ?></td>
                                            <td style="width:100px"><?= date("d-m-Y", strtotime($value->ngay_dang_nhap_cuoi)) ?></td>
                                            <td style="margin-right: 15%"
                                                class="float-right badge badge-<?= $value->active == 1 ? "info" : "danger" ?> badge-pill"><?= $value->active == 1 ? "Kích hoạt" : "Không kích hoat" ?></td>
                                            <td>
                                                <button type="button" class="btn btn-success btn-sm"
                                                        onclick="window.open('customer.php?id=<?= $value->ID ?>')">
                                                    Chi tiết
                                                </button>
                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="deleteAccount('<?= $value->ID ?>')">Sửa
                                                </button>
                                            </td>

                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                                <script type="text/javascript">
                                    function deleteTitle(id) {
                                        var option = confirm('Bạn có muốn xoá sản phẩm này không');
                                        if (!option) {
                                            return;
                                        }
                                        $.post('api/banner/deletebanner.php', {
                                            'id': id
                                        }, function (data) {
                                            alert(data);
                                            // location.reload()
                                        })
                                    }
                                </script>
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
            </div>