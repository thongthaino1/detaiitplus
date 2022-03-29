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
                    <button type="button" class="btn btn-primary btn-sm" onclick="window.open('updateProduct.php')" value="">Thêm mới</button>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-0">Bảng sản phẩm</h5>
                    </div>
                    <form method="GET">
                        <div style="text-align: center" >

                            <select class="select2 custom-select" style="width: 30%; height:36px;" name="ma_loai_san_pham">
                                <option value="">Chọn</option>

                                <?php
                                foreach ($types as $v)
                                {
                                    $a = $v->ID;
                                    $flag = ($a == $id_loai)?'selected':'';
                                    echo $flag;
                                    echo '<option value="'.$v->ID.'"'.$flag.'>'.$v->ten_loai_san_pham.'</option>';
                                }

                                ?>
                            </select>
                            <button type="submit" class="btn btn-success" style="height: 2.4em;" >Lọc</button>
                        </div>
                    </form>
<!--                    <div class="table-responsive">-->

                        <table id = "zero_config" class="table table-bordered table-striped">
                            <thead>
                            <tr>
<!--                                <th width="5%">STT</th>-->
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Ảnh sản phẩm</th>
                                <th scope="col">Đơn giá</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Ngày tạo</th>
                                <th scope="col">Lượt xem</th>
                                <th scope="col" >Thao tác</th>
                            </tr>
                            </thead>



                            <tbody>
                            <?php $count = 1;
                            foreach ($list as $key=>$value) {

                                ?>

                                <tr>
                                    <td scope="row"><a href="updateProduct.php?id=<?= $value->ID?>"><?= $value->ten_san_pham?></a></td>
                                    <td><img width="100" height="100" src="../public/image/product/<?= $value->hinh_san_pham?>"></td>
                                    <td><?= $value->don_gia?></td>
                                    <td><?= $value->mo_ta?></td>
                                    <td><?= $value->so_luong?></td>
                                    <td width="15%"><?= date("d-m-Y",strtotime($value->ngay_tao))?></td>
                                    <td><?= $value->luot_xem?></td>
                                    <td width="15%"><button type="button" class="btn btn-success btn-sm" onclick="window.open('updateProduct.php?id=<?= $value->ID?>','__self')">Sửa</button>
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="deleteProduct('<?= $value->ID?>')">Xóa</button>

                                    </td>

                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <script type="text/javascript">
                        function deleteProduct(id) {
                            var option = confirm('Bạn có muốn xoá sản phẩm này không');
                            if(!option) {
                                return;
                            }
                            $.post('api/delete_product.php', {
                                'id': id
                            }, function(data) {
                                alert(data);
                                // location.reload()
                            })
                        }
                    </script>
                </div>

            </div>
<!--        </div>-->
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