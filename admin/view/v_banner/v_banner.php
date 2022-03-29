<div class="page-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary btn-sm" onclick="window.open('updateBanner.php')" value="">Thêm mới</button>
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
                    <h5 class="card-title m-b-0">Bảng tiêu đề</h5>
                </div>

                <table id = "zero_config" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col" >Thao tác</th>
                    </tr>
                    </thead>



                    <tbody>
                    <?php $count = 1;
                    foreach ($list as $key=>$value) {
//
////                    ?>

<!---->
                    <tr>
<!--                        <td>THdofsfosd</td>-->
                        <td ><?= $count++?></td>
                        <td><img width="100" height="100" src="../public/assets/img/slider/<?= $value->hinh?>"></td>
                        <td><?php echo $value->ten_tieu_de;?></td>
                        <td><?php echo ($value->trang_thai == 1)?"Mở":"Khóa";?></td>
                        <td><button type="button" class="btn btn-success btn-sm" onclick="window.open('updateBanner.php?id=<?= $value->ma_tieu_de?>','__self')">Sửa</button>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="deleteBanner('<?= $value->ma_tieu_de?>')">Xóa</button></td>


                    </tr>
<!--                        --><?php
                    }
//                    ?>
                    </tbody>
                </table>


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