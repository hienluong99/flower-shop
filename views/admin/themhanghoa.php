<?php $this->layout("layouts/default", ["title" => "Thêm hoa mới"]) ?>

<?php $this->start("page_specific_css") ?>


<?php $this->stop() ?>

<?php $this->start("page") ?>


<div class="col-xl-10 admin-rightside mx-auto" style="background-color: #ebeff2">
    <div class="content mt-5">
        <div class="navbar-custom row text-center mb-3">
            <div class="navbar-header">
                <h4>Thêm Hoa mới</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-10 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Form thêm thông tin Hoa</h4>


                        <form name="themHHfrm" actions="/admin/themhanghoa" method="POST" id="themHHfrm" class="needs-validation was-validated" novalidate="">
                            <div class="mb-3">
                                <label for="MaLH" class="form-label">Loại hoa</label>
                                <div class="form-group">
                                    <select class="custom-select" name="MaLH" id="MaLH" required>

                                        <?php
                                        foreach ($loaihang as $lh) :
                                        ?>
                                            <option value="<?= $this->e($lh->MaLH) ?>"><?= $this->e($lh->TenLH) ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">Vui lòng thêm loại hàng cho sản phẩm
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="TenHH" class="form-label">Tên hoa:</label>
                                <input type="text" class="form-control" name="TenHH" id="TenHH" placeholder="Tên hoa" required="">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">Vui lòng tên cho Hoa
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="HinhAnh" class="form-label">Hình ảnh:</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="HinhAnh" id="HinhAnh" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">Vui lòng thêm hình ảnh cho nhân viên
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="MoTaHH" class="form-label">Mô tả về Hoa:</label>
                                <input type="text" class="form-control" name="MoTaHH" id="MoTaHH" placeholder="Mô tả..." required="">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Vui lòng mô tả cho loại hoa
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="Gia" class="form-label">Giá bán:</label>
                                <input type="number" class="form-control" name="Gia" id="Gia" placeholder="... VNĐ" required="" min="1">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Vui lòng nhập giá cho hoa
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="TonKho" class="form-label">Số lượng nhập vào kho:</label>
                                <input type="number" class="form-control" name="TonKho" id="TonKho" placeholder="" required="" min='1' max='999'>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Vui lòng nhập số lượng tồn kho
                                </div>
                            </div>

                            <button class="btn btn-primary" type="submit">Thêm Hoa</button>
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