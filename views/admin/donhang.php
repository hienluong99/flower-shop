<?php $this->layout("layouts/default", ["title" => "Quản lý đơn hàng"]) ?>

<?php $this->start("page_specific_css") ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

<?php $this->stop() ?>

<?php $this->start("page") ?>

<div class="col-xl-10 admin-leftside" style="background-color: #ebeff2">
    <div class="content mt-5">
        <div class="navbar-custom row text-center mb-3">
            <div class="navbar-header">
                <h4>Quản lý đơn hàng</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-3">
                <div class="card card-box">
                    <div class="card-body widget-user">
                        <div class="row ">
                            <div class="col-12 box-body header-card">
                                <div>
                                    <h4>+ <?= $this->e($donhang->count()) ?></h4>
                                </div>
                                <span>Tổng đơn hàng</span>
                            </div>
                            <div class="col-12 box-body footer-card text-center bg-primary">
                                <i class="fas fa-box"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- end col -->


            <div class="col-xl-3 col-md-6 mb-3">
                <div class="card card-box">
                    <div class="card-body widget-user">
                        <div class="row ">
                            <div class="col-12 box-body header-card">
                                <div>
                                    <h4><?= $this->e($donhang1->count()) ?></h4>
                                </div>
                                <span>Đơn hàng mới</span>
                            </div>
                            <div class="col-12 box-body footer-card text-center bg-warning">
                                <i class="fas fa-clock"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- end col -->

            <div class="col-xl-3 col-md-6 mb-3">
                <div class="card card-box">
                    <div class="card-body widget-user">
                        <div class="row ">
                            <div class="col-12 box-body header-card">
                                <div>
                                    <h4><?= $this->e($donhang2->count()) ?></h4>
                                </div>
                                <span>Đã giao</span>
                            </div>
                            <div class="col-12 box-body footer-card text-center bg-success">
                                <i class="fas fa-truck"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- end col -->
            <div class="col-xl-3 col-md-6 mb-3">
                <div class="card card-box">
                    <div class="card-body widget-user">
                        <div class="row ">
                            <div class="col-12 box-body header-card">
                                <div>
                                    <h4><?= $this->e($donhang3->count()) ?></h4>
                                </div>
                                <span>Bị hủy</span>
                            </div>
                            <div class="col-12 box-body footer-card text-center bg-danger">
                                <i class="fas fa-frown-open"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- end col -->

        </div>
        <section class="content">
            <div class="row">
                <div class="card container">
                    <div class="card-body">

                        <div class="col-12">
                            <table id="donhangTable" name="nhanvienTable" class="table table-striped table-bordered table-sm ">

                                <thead>
                                    <tr>
                                        <th scope="col">Mã đơn hàng</th>
                                        <th scope="col">Tên Khách hàng</th>
                                        <th scope="col">Tên nhân viên lập đơn</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Ngày đặt</th>
                                        <th scope="col">Chi tiết đơn</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($donhang as $dh) : ?>

                                        <tr>
                                            <td>
                                                <?= $this->e($dh->SoDonDH) ?>
                                            </td>
                                            <td><?= $this->e($dh->khachhang->HoTenKH) ?></td>
                                            <td><?php if (isset($dh->nhanvien->HoTenNV)) echo $this->e($dh->nhanvien->HoTenNV);  ?></td>
                                            <td><?= $this->e($dh->trangthai->TenTT) ?></td>

                                            <td><?= $this->e($dh->create_at) ?></td>

                                            <td class="text-center">
                                                <a href="/admin/chitietDH/<?= $this->e($dh->SoDonDH) ?>" class="btn btn-xs btn-warning">
                                                    <i alt="Edit" class="fa fa-pencil"> </i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>
</div>
<?php $this->stop() ?>

<?php $this->start("page_specific_js") ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

<script>
    $(document).ready(function() {
        new WOW().init();
        $('#donhangTable').DataTable();

    });
</script>
<?php $this->stop() ?>