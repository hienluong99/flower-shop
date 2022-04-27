<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

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
                        <h4 class="header-title">Form thêm thông tin Loại </h4>


                        <form name="themLHfrm" actions="/admin/themloaihang" method="POST" id="themLHfrm" class="needs-validation was-validated" novalidate="">

                            <div class="mb-3">
                                <label for="TenLH" class="form-label">Tên loại :</label>
                                <input type="text" class="form-control" name="TenLH" id="TenLH" placeholder="Tên loại..." required="">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">Vui lòng tên cho Loại hàng mới
                                </div>
                            </div>


                            <button class="btn btn-primary" type="submit">Thêm Loại hàng</button>
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