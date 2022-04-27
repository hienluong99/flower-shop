<?php $this->layout("layouts/default", ["title" => "Quản lý hoa"]) ?>

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
                <h4>Quản lý Hoa</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-3">
                <div class="card">
                    <div class="card-body widget-user">
                        <div class="d-flex align-items-center">

                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="mt-0 mb-1">Tổng số loại hoa</h5>
                                <p class="text-muted mb-2 font-13 text-truncate">Bao gồm tất cả loại hoa đã được thêm</p>
                                <h6 class="text-warning"><b style="font-size:38px"><?php echo $loaihang->count(); ?></b></h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- end col -->
            <div class="col-xl-3 col-md-6 mb-3">
                <div class="card">
                    <div class="card-body widget-user">
                        <div class="d-flex align-items-center">

                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="mt-0 mb-1">Tổng số Hoa</h5>
                                <p class="text-muted mb-2 font-13 text-truncate">Tất cả hoa của các loại</p>
                                <h6 class="text-warning"><b style="font-size:38px"><?php echo $hanghoa->count(); ?></b></h6>
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
                                    <h3>Bảng danh sách Loại Hoa</h3>
                                </div>
                                <div class="col-6"><a href="/admin/themloaihang"><span class="btn btn-primary"><i class="fas fa-user-plus"></i>
                                            Thêm Loại Hoa mới</span></a></div>
                            </div>
                            <table id="loaihangTable" name="loaihangTable" class="table table-striped table-bordered table-sm ">

                                <thead>
                                    <tr>
                                        <th scope="col">Mã Loại </th>
                                        <th scope="col">Tên Loại Hoa</th>


                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($loaihang as $lh) : ?>

                                        <tr>
                                            <td>
                                                <?= $this->e($lh->MaLH) ?>
                                            </td>
                                            <td><?= $this->e($lh->TenLH) ?></td>


                                            <td class="text-center">
                                                <a href="/admin/chinhsualoaihang/<?= $this->e($lh->MaLH) ?>" class="btn btn-xs btn-warning">
                                                    <i alt="Edit" class="fa fa-pencil"> </i></a>
                                                <form class="delete" action="/loaihang/delete/<?= $this->e($lh->MaLH) ?>" method="POST" style="display: inline;">
                                                    <button type="submit" id="delete" name="delete" data-bs-toggle="modal" ata-bs-target="#delete-confirm" class="btn btn-xs btn-danger">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </button>
                                                </form>


                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>

                        </div>
                        <div class="col-12 mt-5">
                            <div class="row">
                                <div class="col-6">
                                    <h3>Bảng danh sách Hoa</h3>
                                </div>
                                <div class="col-6"><a href="/admin/themhanghoa"><span class="btn btn-success"><i class="fas fa-user-plus"></i>
                                            Thêm Hoa mới</span></a></div>
                            </div>
                            <table id="hoaTable" name="hoaTable" class="table table-striped table-bordered table-sm ">

                                <thead>
                                    <tr>
                                        <th scope="col"> </th>
                                        <th scope="col">Mã Loại </th>
                                        <th scope="col">Hình Ảnh </th>
                                        <th scope="col">Tên Hoa</th>
                                        <th scope="col">Mô tả về hoa</th>
                                        <th scope="col">Giá bán</th>
                                        <th scope="col">Tồn kho</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $i = 1;
                                    foreach ($hanghoa as $hh) : ?>

                                        <tr>
                                            <th scope="row"><?= $i++; ?></th>
                                            <td class="text-center">
                                                <?= $this->e($hh->MaLH) ?>
                                            </td>
                                            <td class="text-center">
                                                <img style="width: 50px; height: 50px;" class="img-responsive" src="<?= $this->e($hh->HinhAnh) ?>" alt="Hinh anh">
                                            </td>
                                            <td><?= $this->e($hh->TenHH) ?></td>
                                            <td><?= $this->e($hh->MoTaHH) ?></td>
                                            <td><?= $this->e($hh->Gia) ?></td>
                                            <td><?= $this->e($hh->TonKho) ?></td>

                                            <td class="text-center">
                                                <a href="/admin/chinhsuahanghoa/<?= $this->e($hh->MSHH) ?>" class="btn btn-xs btn-warning">
                                                    <i alt="Edit" class="fa fa-pencil"> </i></a>
                                                <form class="delete" action="/hanghoa/delete/<?= $this->e($hh->MSHH) ?>" method="POST" style="display: inline;">
                                                    <button type="submit" id="delete" name="delete" data-bs-toggle="modal" ata-bs-target="#delete-confirm" class="btn btn-xs btn-danger">
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

<?php $this->stop() ?>

<?php $this->start("page_specific_js") ?>
<script src="// /dataTables.bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

<script>
    $(document).ready(function() {
        new WOW().init();
        // $('#loaihangTable').DataTable();

        $('button[name="delete"]').on('click', function(e) {
            if (confirm("Are you sure you want to delete?")) {

            } else {
                e.preventDefault();
            }
        })

        $('#hoaTable').DataTable();


    });
</script>
<?php $this->stop() ?>