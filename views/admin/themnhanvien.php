<?php
$hoten = "";
$chucvu = "";
$hinhanh = "";
$email = "";
$mk = "";
$dc = "";
$sdt = "";

if (isset($_SESSION['old'])) {
    $hoten = $_SESSION['old']['HoTenNV'];
    $chucvu = $_SESSION['old']['ChucVu'];
    $hinhanh = $_SESSION['old']['HinhAnh'];
    $email = $_SESSION['old']['Email'];
    $mk = $_SESSION['old']['Password'];
    $dc = $_SESSION['old']['DiaChi'];
    $sdt = $_SESSION['old']['SoDienThoai'];
}

?>

<?php $this->layout("layouts/default", ["title" => "Thêm nhân viên"]) ?>

<?php $this->start("page_specific_css") ?>


<?php $this->stop() ?>

<?php $this->start("page") ?>


<div class="col-xl-10 admin-rightside mx-auto" style="background-color: #ebeff2">
    <div class="content mt-5">
        <div class="navbar-custom row text-center mb-3">
            <div class="navbar-header">
                <h4>Thêm nhân viên mới</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-10 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Form thêm thông tin nhân viên</h4>


                        <form name="themNVfrm" actions="/admin/themnhanvien" method="POST" id="themNVfrm" class="needs-validation was-validated" novalidate="">
                            <div class="mb-3">
                                <label for="HoTen" class="form-label">Họ tên nhân viên:</label>
                                <input type="text" class="form-control" name="HoTenNV" id="HoTenNV" value="<?= $hoten; ?>" placeholder="Họ tên nhân viên" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="ChucVu" class="form-label">Chức vụ</label>
                                <div class="form-group">
                                    <select class="custom-select" name="ChucVu" id="ChucVu" required>
                                        <option <?php if ($chucvu == "Admin") echo "selected"; ?> value="Admin">Admin</option>
                                        <option <?php if ($chucvu == "Ban hang") echo "selected"; ?> value="Ban hang">Nhân viên bán hàng</option>
                                        <option <?php if ($chucvu == "Quan li") echo "selected"; ?> value="Quan li">Quản lý shop</option>
                                    </select>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">Vui lòng thêm chức vụ cho nhân viên
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="HinhAnh" class="form-label">Hình ảnh:</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" value="<?= $hinhanh; ?>" name="HinhAnh" id="HinhAnh" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">Vui lòng thêm hình ảnh cho nhân viên
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="Email" class="form-label">Email:</label>
                                <input type="email" class="form-control" name="Email" id="Email" placeholder="Nhập email..." value="<?= $email; ?>" required="">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    <?php if (isset($_SESSION['errorsEmail'])) echo $_SESSION['errorsEmail']; ?>
                                    Vui lòng thêm Email cho nhân viên
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Cấp mật khẩu</label>
                                <input type="password" class="form-control" name="Password" id="Password" value="<?= $mk; ?>" placeholder="Nhập mật khẩu">

                            </div>
                            <div class="mb-3">
                                <label for="DiaChi" class="form-label">Địa chỉ:</label>
                                <input type="text" class="form-control" name="DiaChi" id="DiaChi" value="<?= $dc; ?>" placeholder="Nhập địa chỉ" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Vui lòng thêm địa chỉ cho nhân viên
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="SDT" class="form-label">Số điện thoại:</label>
                                <input type="text" class="form-control" name="SoDienThoai" id="SoDienThoai" value="<?= $sdt; ?>" placeholder="Số điện thoại" required="">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Vui lòng thêm SĐT cho nhân viên
                                </div>
                            </div>

                            <button class="btn btn-primary" type="submit">Thêm nhân viên</button>
                        </form>

                    </div> <!-- end card-body-->
                </div>
            </div>
        </div>

    </div>
</div>


<?php $this->stop() ?>
<script>
    $(document).ready(function() {

        const $tableID = $('#table');

        $tableID.on('click', '.remove', function() {
            $(this).parents('tr').detach();
        });
        console.log($(window).width())
        if ($(window).width() < 1300) {
            $('.l-nav')
            $('.header-toggle').removeClass('d-none');
        } else {
            $('.header-toggle').addClass('d-none');
        }
    });
</script>

<?php $this->start("page_specific_js") ?>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

<?php $this->stop() ?>