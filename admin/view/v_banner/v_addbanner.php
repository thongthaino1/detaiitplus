<div class="page-wrapper">
<div class="container-fluid">

                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <form  class="form-horizontal" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">Thêm tiêu đề</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên tiêu đề</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="fname" value="<?=$s_id?>" name = "id" style="display: none" >
                                            <input type="text" class="form-control" id="fname" value="<?=$s_ten_tieu_de?>" required name = "ten_tieu_de" placeholder="Thêm tiêu đề">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh</label>
                                        <div class="col-sm-9">
                                            <input type="file"  class="form-control" id="hinh_anh" name = "hinh_anh" value="<?=$s_hinh_anh?>">
                                            <?php
                                            if($s_hinh_anh != "")
                                            {
                                                ?>
                                                <img src="../public/image/banner/<?= $s_hinh_anh?>" height="250px" width="250px">
                                            <?php
                                            }

                                            ?>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Trạng thái</label>
                                        <div class="col-sm-9">

                                            <select name="trang_thai" >

                                                <option value="1" <?php echo $s_trang_thai == 1?'selected':'';?>>Mở</option>
                                                <option value="0" <?php echo ($s_trang_thai == 0)?'selected':'';?>>Khóa</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" name = "submit" class="btn btn-primary">Submit</button>

                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>

                </div>
                <!-- editor -->

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
