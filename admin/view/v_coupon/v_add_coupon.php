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
                            <h4 class="card-title">Thêm khuyến mãi</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label" >Tên khuyến mãi</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="fname" value="<?=$s_id?>" name = "ID" style="display: none" >
                                    <input type="text" class="form-control" id="fname" value="<?=$s_couponName?>" required name = "coupon_name" placeholder="Tên khuyến mãi">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Phẩn trăm giảm giá</label>
                                <div class="col-sm-9">
                                    <input type="text"  class="form-control" id="hinh_anh" name = "discount" value="<?=$s_discount?>" placeholder="Giảm giá">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Ngày bắt đầu</label>
                                <div class="col-sm-9">
                                    <input type="date"  class="form-control" id="hinh_anh" name = "date_start" value="<?=$s_dateStart?>" required>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Ngày kết thúc</label>
                                <div class="col-sm-9">
                                    <input type="date"  class="form-control" id="hinh_anh" name = "date_end" value="<?=$s_dateEnd?>" required>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label" >Trạng thái</label>
                                <div class="col-sm-9">
                                    <select name="status">
                                        <option value="1" <?php echo $s_status == 1 ?'selected':'';?>>Mở</option>
                                        <option value="0" <?php echo ($s_status == 0 && $s_status != "")?'selected':'';?>>Khóa</option>
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
