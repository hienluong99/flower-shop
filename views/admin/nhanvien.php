<?php $this->layout("layouts/default", ["title" => "Quản lý nhân viên"]) ?>

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
                <h4>Quản lý nhân viên</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-3">
                <div class="card" style="min-height: 180px;">
                    <div class="card-body widget-user">
                        <div class="d-flex align-items-center">

                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="mt-0 mb-1">Tổng nhân viên</h5>
                                <p class="text-muted mb-2 font-13 text-truncate">Chỉ bao gồm nhân viên chính
                                    thức</p>
                                <h6 class="text-warning"><b style="font-size:38px"><?php echo $nhanvien->count(); ?></b></h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- end col -->

            <div class="col-xl-3 col-md-6 mb-3">
                <div class="card" style="min-height: 180px;">
                    <div class="card-body widget-user">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 avatar-lg me-3">
                                <img src="<?= $this->e($nhanvien[0]->HinhAnh) ?>" class="img-fluid rounded-circle" alt="user">
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="mt-0 mb-1"> <?= $this->e($nhanvien[0]->HoTenNV) ?></h5>
                                <p class="text-muted mb-2 font-13 text-truncate"><?= $this->e($nhanvien[0]->Email) ?></p>
                                <small class="text-pink"><b><?= $this->e($nhanvien[0]->ChucVu) ?></b></small>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- end col -->

            <div class="col-xl-3 col-md-6 mb-3">
                <div class="card" style="min-height: 180px;">
                    <div class="card-body widget-user">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 avatar-lg me-3">
                                <img src="<?= $this->e($nhanvien[1]->HinhAnh) ?>" class="img-fluid rounded-circle" alt="user">
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="mt-0 mb-1"><?= $this->e($nhanvien[0]->HoTenNV) ?></h5>
                                <p class="text-muted mb-2 font-13 text-truncate"><?= $this->e($nhanvien[0]->Email) ?></p>
                                <small class="text-success"><b><?= $this->e($nhanvien[0]->ChucVu) ?></b></small>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- end col -->

            <div class="col-xl-3 col-md-6 mb-3">
                <div class="card" style="min-height: 180px;">
                    <div class="card-body widget-user">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 avatar-lg me-3">
                                <img src="<?= $this->e($nhanvien[2]->HinhAnh) ?>" class="img-fluid rounded-circle" alt="user">
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="mt-0 mb-1"><?= $this->e($nhanvien[2]->HoTenNV) ?></h5>
                                <p class="text-muted mb-2 font-13 text-truncate"><?= $this->e($nhanvien[2]->Email) ?></p>
                                <small class="text-info"><b><?= $this->e($nhanvien[2]->ChucVu) ?></b></small>
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
                                    <h3>Bảng danh sách nhân viên</h3>
                                </div>
                                <div class="col-6"><a href="/admin/themnhanvien"><span class="btn btn-primary"><i class="fas fa-user-plus"></i>
                                            Thêm nhân viên</span></a></div>
                            </div>
                            <table id="nhanvienTable" name="nhanvienTable" class="table table-striped table-bordered table-sm ">

                                <thead>
                                    <tr>
                                        <th scope="col">ID </th>
                                        <th scope="col">Họ tên</th>
                                        <th scope="col">Chức vụ</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">SĐT</th>
                                        <th scope="col">Địa chỉ</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $i = 1;
                                    foreach ($nhanvien as $nv) : ?>

                                        <tr>
                                            <th scope="row"><?= $i++; ?></th>
                                            <td>
                                                <?= $this->e($nv->HoTenNV) ?>
                                            </td>
                                            <td><?= $this->e($nv->ChucVu) ?></td>
                                            <td><?= $this->e($nv->Email) ?></td>
                                            <td><?= $this->e($nv->SoDienThoai) ?></td>
                                            <td><?= $this->e($nv->DiaChi) ?></td>

                                            <td class="text-center">
                                                <a href="/admin/chinhsuanhanvien/<?= $this->e($nv->MSNV) ?>" class="btn btn-xs btn-warning">
                                                    <i alt="Edit" class="fa fa-pencil"> </i></a>
                                                <form class="delete" action="/nhanvien/delete/<?= $this->e($nv->MSNV) ?>" method="POST" style="display: inline;">
                                                    <button type="submit" id="delete-NV" name="delete-NV" data-bs-toggle="modal" ata-bs-target="#delete-confirm" class="btn btn-xs btn-danger">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </button>
                                                </form>


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
<div id="delete-confirm" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body">Bạn có chắc xóa nhân viên xóa nhân viên?</div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-danger" id="delete">Delete</button>
                <button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
            </div>
        </div>
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

        $('button[name="delete-NV"]').on('click', function(e) {
            if (confirm("Are you sure you want to delete?")) {

            } else {
                e.preventDefault();
            }
        })


        $('#nhanvienTable').DataTable();

    });
</script>
<?php $this->stop() ?>