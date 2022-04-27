<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page_specific_css") ?>


<?php $this->stop() ?>

<?php $this->start("page") ?>


<div class="col-10 admin-rightside mx-auto" style="background-color: #ebeff2">
    <div class="content mt-5">
        <div class="navbar-custom row text-center mb-3">
            <div class="navbar-header">
                <h4>Chỉnh sửa loại hàng</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Form chỉnh sửa thông tin Loại </h4>


                        <form name="themLHfrm" action="/loaihang/<?= $this->e($lh->MaLH) ?>" method="POST" id="themLHfrm" class="needs-validation was-validated" novalidate="">

                            <div class="mb-3">
                                <label for="TenLH" class="form-label">Tên loại :</label>
                                <input type="text" class="form-control" name="TenLH" id="TenLH" required="" value="<?= $this->e($lh->TenLH) ?>">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">Vui lòng tên cho Loại hàng mới
                                </div>
                            </div>


                            <button class="btn btn-primary" type="submit">Sửa Loại hàng</button>
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