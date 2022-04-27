<?php

use App\Models\KhachHang;
use App\Models\DonHang;
use App\Models\LoaiHang;
use App\Models\HangHoa;


$kh = KhachHang::all();
$dh = DonHang::all();
$lh = LoaiHang::all();
$hh = HangHoa::all();


?>

<?php $this->layout("layouts/default", ["title" => "Trang chủ"]) ?>

<?php $this->start("page_specific_css") ?>


<?php $this->stop() ?>

<?php $this->start("page") ?>


<div class="col-xl-10 admin-leftside" style="background-color: #ebeff2">
    <div class="content mt-5">
        <div class="navbar-custom row text-center">
            <div class="navbar-header">
                <h4>Dashboard</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6 col-12 mb-3">
                <div class="card">
                    <div class="card-body">


                        <h4 class="header-title mt-0 mb-4">Tổng nhân sự</h4>

                        <div class="widget-chart-1">

                        </div>

                        <div class="widget-detail-1 text-end">
                            <h1 class="fw-normal pt-2 mb-1" style="color:orange;"> <?= $this->e(count($kh)) ?> </h1>
                            <p class="text-muted mb-1">Nhân viên chính thức</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12 mb-3">
                <div class="card">
                    <div class="card-body">


                        <h4 class="header-title mt-0 mb-4">Tổng đơn hàng</h4>

                        <div class="widget-chart-1">

                        </div>

                        <div class="widget-detail-1 text-end">
                            <h1 class="fw-normal pt-2 mb-1" style="color:orange;"> <?= $this->e(count($dh)) ?> </h1>
                            <p class="text-muted mb-1">Tổng đơn hàng đã đặt</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12 mb-3">
                <div class="card">
                    <div class="card-body">


                        <h4 class="header-title mt-0 mb-4">Tổng loại hoa</h4>

                        <div class="widget-chart-1">

                        </div>

                        <div class="widget-detail-1 text-end">
                            <h2 class="fw-normal pt-2 mb-1" style="color:orange;"> <?= $this->e(count($lh)) ?> </h2>
                            <p class="text-muted mb-1">Các loại hoa của shop</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12 mb-3">
                <div class="card">
                    <div class="card-body">


                        <h4 class="header-title mt-0 mb-4">Tổng số hoa đã nhập</h4>

                        <div class="widget-chart-1">

                        </div>

                        <div class="widget-detail-1 text-end">
                            <h2 class="fw-normal pt-2 mb-1" style="color:orange;"> <?= $this->e(count($hh)) ?> </h2>
                            <p class="text-muted mb-1">Tất cả sản phẩm hoa của shop</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <?php foreach ($nhanvien as $nv) : ?>
                <div class="col-xl-3 col-md-6 mb-3">
                    <div class="card" style="min-height: 180px;">
                        <div class="card-body widget-user">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 avatar-lg me-3 ">
                                    <img src="<?= $this->e($nv->HinhAnh) ?>" class="img-fluid rounded-circle" alt="user">
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h5 class="mt-0 mb-1"><?= $this->e($nv->HoTenNV) ?></h5>
                                    <p class="text-muted mb-2 font-13 text-truncate"><?= $this->e($nv->Email) ?></p>
                                    <small class="text-warning"><b><?= $this->e($nv->ChucVu) ?></b></small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            <?php endforeach ?>




        </div>
    </div>
</div>



<?php $this->stop() ?>

<?php $this->start("page_specific_js") ?>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

<?php $this->stop() ?>