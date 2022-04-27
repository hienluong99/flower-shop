<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page_specific_css") ?>


<?php $this->stop() ?>

<?php $this->start("page") ?>


<div class="col-10 admin-rightside mx-auto" style="background-color: #ebeff2">
    <div class="content mt-5">
        <div class="navbar-custom row text-center mb-3">
            <div class="navbar-header">
                <h4>Thêm nhân viên mới</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Form chỉnh sửa thông tin nhân viên</h4>


                        <form name="NVfrm" action="/nhanvien/<?= $this->e($nv->MSNV) ?>" method="POST" id="NVfrm" class="needs-validation was-validated">
                            <div class="mb-3">
                                <label for="HoTen" class="form-label">Họ tên nhân viên:</label>
                                <input type="text" class="form-control" name="HoTenNV" id="HoTenNV" value=" <?= $this->e($nv->HoTenNV) ?>" placeholder="Họ tên nhân viên" required="">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="ChucVu" class="form-label">Chức vụ</label>
                                <div class="form-group">
                                    <select class="custom-select" name="ChucVu" id="ChucVu" required>
                                        <?= $default = $this->e($nv->ChucVu) ?>
                                        <option value="Admin" <?php if ($default == "Admin") echo "selected"; ?>>Admin</option>
                                        <option value="Quan ly" <?php if ($default == "Quan ly") echo "selected"; ?>>Quản lý shop</option>
                                        <option value="Ban hang" <?php if ($default == "Ban hang") echo "selected"; ?>>Nhân viên bán hàng</option>
                                    </select>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">Vui lòng thêm chức vụ cho nhân viên
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3" hidden>
                                <label for="HinhAnh" class="form-label">Hình ảnh:</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="text" class="custom-file-input" value="<?= $this->e($nv->HinhAnh) ?>" name="HinhAnh" id="HinhAnh">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">Vui lòng thêm hình ảnh cho nhân viên
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3" hidden>
                                <label for="Email" class="form-label">Email:</label>
                                <input type="email" class="form-control" name="Email" id="Email" value="<?= $this->e($nv->Email) ?>" placeholder="Nhập email..." required="">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Vui lòng thêm Email cho nhân viên
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Cấp mật khẩu</label>
                                <input type="password" class="form-control" name="Password" value="<?= $this->e($nv->Password) ?>" id="Password" placeholder="Nhập mật khẩu">

                            </div>
                            <div class="mb-3">
                                <label for="DiaChi" class="form-label">Địa chỉ:</label>
                                <input type="text" class="form-control" name="DiaChi" id="DiaChi" value="<?= $this->e($nv->DiaChi) ?>" placeholder="Nhập địa chỉ" required="">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Vui lòng thêm địa chỉ cho nhân viên
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="SDT" class="form-label">Số điện thoại:</label>
                                <input type="text" class="form-control" name="SoDienThoai" value="<?= $this->e($nv->SoDienThoai) ?>" id="SoDienThoai" placeholder="Số điện thoại" required="">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Vui lòng thêm SĐT cho nhân viên
                                </div>
                            </div>

                            <button class="btn btn-primary" type="submit">Cập nhật</button>
                        </form>

                    </div> <!-- end card-body-->
                </div>
            </div>
        </div>

    </div>
</div>


<?php $this->stop() ?>


<?php $this->start("page_specific_js") ?>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        new WOW().init();
    });
</script>
<?php $this->stop() ?>