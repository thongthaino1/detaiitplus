
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form class="form-horizontal" id="form_addcategory" method="post">
                            <div class="card-body">
                                <?php
                                if(!empty($error)) echo "<div class=\"alert alert-danger\">
  <strong>Danger!</strong> ".$error."
</div>";
                                ?>
                                <h4 class="card-title">Sửa loại sản phẩm</h4>
                                <div class="form-group row">

                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Loại sản phẩm</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="ten_loai" name="ten_loai" value="<?php echo $category->ten_loai_san_pham;?>"  placeholder="loại sản phẩm" required>
                                    </div>
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Trạng thái</label>
                                    <div class="col-sm-9">
                                        <select  class="form-control" id="ten_loai" name="trang_thai"  required>
                                            <option value="1" <?php echo ($category->trang_thai == 1)?'selected':'';?>>Mở</option>
                                            <option value="0" <?php echo ($category->trang_thai == 0)?'selected':'';?>>Khóa</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="border-top">
                                <div class="card-body">
                                    <button style="margin-left: 40%;" type="submit" class="btn btn-primary" id="save" name="btnSave">Lưu</button>
                                    <button style="margin-left: 20%;" id="deleteCategory" class="btn btn-danger" onclick="delete_category('<?= $category->ID?>')">Xóa</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        document.getElementById("deleteCategory").addEventListener("click", function(event){
            event.preventDefault();
        });
    </script>
