<div class="page-wrapper">
    <div class="container-fluid">

        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <h4 class="card-title">Thêm </h4>
                            <input type="number" class="form-control" id="fname" value="<?=$s_id?>" name = "id" style="display: none" >

                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Loaị sản phẩm</label>
                                <div class="col-sm-9">
                                    <select name="typeID" required>
                                        <option value="">----Chọn-----</option>
                                        <?php
                                        foreach ($types as $value)
                                        {
                                            ?>
                                            <option value="<?= $value->ID?>" <?php if($s_typeID == $value->ID){
                                                echo "selected";
                                            }?>><?=$value->ten_loai_san_pham?></option>';
                                            <?php
                                        }

                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên sản phẩm</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" value="<?=$s_name?>" required name = "name" placeholder="Thêm tên sản phẩm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" required name = "img" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Đơn giá</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" value="<?=$s_price?>" required name = "price" placeholder="Đơn giá">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Mô tả</label>
                                <div class="col-sm-9">
                                    <textarea  class="form-control" id="fname" value="<?=$s_desc?>" required name = "desc" placeholder="Thêm mô tả cho sản phẩm" ><?=$s_desc?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Số lượng</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="fname" value="<?=$s_amount?>" placeholder="Số lượng" required name = "amount" >
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