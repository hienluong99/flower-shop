<?php $this->layout("layouts/default", ["title" => "Chi tiết đơn hàng"]) ?>

<?php $this->start("page_specific_css") ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php $this->stop() ?>

<?php $this->start("page") ?>
<div class="col-xl-10 admin-leftside" style="background-color: #ebeff2">
    <div class="content mt-5">
        <div class="navbar-custom row text-center mb-3">
            <div class="navbar-header">
                <h4>Chi tiết đơn hàng</h4>
            </div>
        </div>

        <section class="content">
            <div class="row">
                <div class="card container">
                    <div class="card-body">

                        <div class="col-12">
                            <table class="table table-hover">
                                <thead>

                                    <tr></tr>
                                    <tr>
                                        <th>Mã đơn hàng:</th>
                                        <th><?= $this->e($donhang->SoDonDH) ?></th>
                                    </tr>
                                    <tr>
                                        <th>Tên Khách hàng:</th>
                                        <th><?= $this->e($donhang->khachhang->HoTenKH) ?></th>
                                    </tr>
                                    <tr>
                                        <th>Tên Người nhận:</th>
                                        <th><?= $this->e($donhang->HoTenNN) ?></th>
                                    </tr>
                                    <tr>
                                        <th>Số điện thoại người nhận:</th>
                                        <th><?= $this->e($donhang->SDTNN) ?></th>
                                    </tr>
                                    <tr>
                                        <th>Địa chỉ giao:</th>
                                        <th><?= $this->e($donhang->DiaChiGH) ?></th>
                                    </tr>
                                    <tr>
                                        <th>Số điện thoại liên lạc:</th>
                                        <th><?= $this->e($donhang->khachhang->SoDienThoai) ?></th>
                                    </tr>
                                    <tr>
                                        <th>Lời nhắn:</th>
                                        <th><?= $this->e($donhang->LoiNhan) ?></th>
                                    </tr>
                                </thead>
                                <thead>
                                    <tr>
                                        <th>Danh sách hoa đã đặt</th>
                                    </tr>
                                </thead>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Hình ảnh</th>
                                        <th>Tên hoa</th>
                                        <th>Đơn giá</th>
                                        <th>Số lượng</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $i = 0;
                                    $tong = 0;
                                    foreach ($chitietDH as $CTHH) :
                                    ?>

                                        <tr>
                                            <td><?= ++$i; ?></td>
                                            <td><img src="<?= $this->e($CTHH->hanghoa->HinhAnh) ?>" width="50px" height="50px" alt=""></td>
                                            <td><?= $this->e($CTHH->hanghoa->TenHH) ?></td>
                                            <td><?= number_format($this->e($CTHH->hanghoa->Gia), 0, '', ',') ?> <span>VNĐ</span></td>
                                            <td><?= $this->e($CTHH->SoLuong) ?></td>
                                            <?php $tong += $CTHH->hanghoa->Gia * $CTHH->SoLuong; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>

                                        <td <?php if ($this->e($donhang->MaTT) == 2 || $this->e($donhang->MaTT) == 3) echo "hidden"; ?>>
                                            <form class="delete" action="/donhang/duyetdon/<?= $this->e($donhang->SoDonDH) ?>" method="POST" style="display: inline;">
                                                <button type="submit" id="delete-NV" name="đuyetdon" data-bs-toggle="modal" ata-bs-target="#delete-confirm" class="btn btn-xs btn-success">
                                                    Duyệt đơn
                                                </button>
                                            </form>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <form class="delete" action="/donhang/huydon/<?= $this->e($donhang->SoDonDH) ?>" method="POST" style="display: inline;">
                                                <button type="submit" id="delete-NV" name="huydon" data-bs-toggle="modal" ata-bs-target="#delete-confirm" class="btn btn-xs btn-danger">
                                                    Hủy đơn
                                                </button>
                                            </form>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td><a href="/admin/donhang">
                                                <span class="btn btn-info"> <i class="fas fa-backspace"></i>Quay
                                                    lại</span>
                                            </a></td>
                                    </tr>
                                </tfoot>
                                <tfoot>
                                    <tr>
                                        <th>Tổng cộng</th>
                                        <th><?php echo number_format($this->e($tong), 0, '', ',') ?> <span>VNĐ</span></th>
                                    </tr>
                                </tfoot>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>

<?php $this->stop() ?>

<?php $this->start("page_specific_js") ?>
<script src="// /dataTables.bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>




<script>
    $(document).ready(function() {
        new WOW().init();

        $('button[name="đuyetdon"]').on('click', function(e) {
            if (confirm("Bạn muốn duyệt đơn hàng?")) {

            } else {
                e.preventDefault();
            }
        })
        $('button[name="huydon"]').on('click', function(e) {
            if (confirm("Bạn có chắc hủy đơn hàng này?")) {

            } else {
                e.preventDefault();
            }
        })



    });
</script>
<?php $this->stop() ?>