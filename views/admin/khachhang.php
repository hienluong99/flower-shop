<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

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
                <h4>Thông tin khách hàng</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-3">
                <div class="card" style="min-height: 180px;">
                    <div class="card-body widget-user">
                        <div class="d-flex align-items-center">

                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="mt-0 mb-1">Tổng khách hàng</h5>
                                <p class="text-muted mb-2 font-13 text-truncate">Bao gồm tất cả các khách hàng đã đặt hàng</p>
                                <h6 class="text-warning"><b style="font-size:38px"><?php echo $khachhang->count(); ?></b></h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- end col -->




        </div>
        <section class="content">
            <div class="row">
                <div class="card container-fluid">
                    <div class="card-body">

                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <h3>Bảng danh sách khách hàng</h3>
                                </div>

                            </div>
                            <table id="khachhangTable" name="khachhangTable" class="table table-striped table-bordered table-sm ">

                                <thead>
                                    <tr>
                                        <th scope="col"> </th>
                                        <th scope="col">Họ tên</th>
                                        <th scope="col">Địa chỉ</th>
                                        <th scope="col">SĐT</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Ngày đặt</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $i = 1;
                                    foreach ($khachhang as $kh) : ?>

                                        <tr>
                                            <th scope="row"><?= $i++; ?></th>
                                            <td>
                                                <?= $this->e($kh->HoTenKH) ?>
                                            </td>
                                            <td><?= $this->e($kh->DiaChi) ?></td>
                                            <td><?= $this->e($kh->SoDienThoai) ?></td>
                                            <td><?= $this->e($kh->Email) ?></td>
                                            <td><?= $this->e($kh->create_at) ?></td>


                                        </tr>
                                    <?php endforeach ?>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div id="delete-confirm" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Confirmation</h4>
                    </div>
                    <div class="modal-body">Bạn có chắc xóa nhân viên?</div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-danger" id="delete">Delete</button>
                        <button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
                    </div>
                </div>
            </div>
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
        $('#khachhangTable').DataTable();

    });
</script>
<?php $this->stop() ?>