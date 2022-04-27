<?php

session_start();



?>

<?php

$ngaynhan = isset($_SESSION['ngaynhan']) ? $_SESSION['ngaynhan'] : '';
$gionhan = isset($_SESSION['gionhan']) ? $_SESSION['gionhan'] : '';
$loinhan = isset($_SESSION['loinhan']) ? $_SESSION['loinhan'] : '';

$this->layout("layouts/defaultClient", ["title" => "Thanh toán"]) ?>

<?php $this->start("page_specific_css") ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php $this->stop() ?>

<?php $this->start("page") ?>
<div class="content">
    <div class="breadum-section">
        <div class="container-fluid">
            <div class="row py-4" style="border-radius: 4px; background-color: rgb(248, 248, 248);">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6 text-end">
                    <div class="page-title">
                        <h6 style="color: rgb(153, 153, 153); font-weight: 600; letter-spacing: 0.72px; margin-right: 50px;">
                            <a style="color: #555;" href="/client">TRANG CHỦ</a> / THANH TOÁN
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="my-5">
        <div class="container mt-4">
            <form action="/thanhtoantatca" method="post">
                <div class="row">
                    <div class="col-md-7 col-12">
                        <div class="left-checkout-form mx-3">
                            <div class="checkout-form-title">
                                <h4>Thông tin giao hàng</h4>
                            </div>
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <input type="text" class="form-control " name="HoTenKH" id="name" placeholder="Họ tên người đặt ">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="SoDienThoai" id="phone" placeholder="Số điện thoại">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3">
                                            <input type="email" class="form-control" name="Email" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="DiaChiGH" id="address" placeholder="Địa chỉ giao hoa">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3">
                                            <div class="md-form md-outline" style="min-height: 50px;">
                                                <label for="NgayGH">Ngày nhận</label>
                                                <input type="date" id="default-date-picker" name="NgayGH" class="form-control px-3" value="<?= $ngaynhan ?>" placeholder="Select date">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3">
                                            <div class="md-form md-outline">
                                                <label for="GioGH">Giờ nhận</label>

                                                <input type="time" id="default-time-picker" class="form-control" name="GioGH" value="<?= $gionhan ?>" placeholder="Select time">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <input type="checkbox" name="present" id="present" checked="checked">
                                            <label for="present">Gửi tặng người khác? </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="name-receive-row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <input type="text" class="form-control " name="HoTenNN" id="name-receive" placeholder="Họ tên người nhận">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="phone-receive-row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="SDTNN" id="phone-receive" placeholder="Số điện thoại người nhận">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <textarea style="width: 100%;" name="LoiNhan" id="note" rows="5" value="" placeholder="<?= $loinhan ?>"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-12">
                        <div class="right-checkout-form">
                            <div class="checkout-form-title">
                                <h4>Thông tin đơn hàng</h4>
                            </div>
                            <div class="order-summary-context">
                                <div class="text-justify ">
                                    <a href="/client/giohang">Cập nhật giỏ hàng</a>
                                </div>
                                <div class="order-summary-table">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th><strong>Sản phẩm</strong></th>
                                                <th><strong>Số lượng</strong></th>
                                                <th><strong>Tạm tính</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $tongtien = 0;
                                            for ($i = 0; $i < count($_SESSION['cart']); $i++) : ?>
                                                <tr>
                                                    <td><?= $_SESSION['cart'][$i]['TenHH'] ?></td>
                                                    <td><?= $_SESSION['cart'][$i]['qty'] ?></td>
                                                    <td><?= number_format($this->e($_SESSION['cart'][$i]['qty'] * $_SESSION['cart'][$i]['Gia']), 0, '', ',')  ?> đ</td>
                                                </tr>
                                                <?php $tongtien += $_SESSION['cart'][$i]['qty'] * $_SESSION['cart'][$i]['Gia']; ?>
                                            <?php endfor ?>

                                        </tbody>>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2">Tổng tạm tính</td>
                                                <td><?= number_format($tongtien, 0, '', ',')  ?> đ</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">Phí giao hàng</td>
                                                <td>0đ</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">Tổng cộng</td>
                                                <td><?= number_format($tongtien, 0, '', ',')  ?> đ</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="d-flex " style="align-items: center; margin-left: 20px;">
                                    <button class="btn-buy">
                                        MUA NGAY
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>


    <script>
        var accountHover = document.getElementById('accountHover');

        accountHover.hover(function() {
            $('.dropdown-toggle', this).trigger('click');
        });


        var modelId = document.getElementById('modelId');

        modelId.addEventListener('show.bs.modal', function(event) {
            // Button that triggered the modal
            let button = event.relatedTarget;
            // Extract info from data-bs-* attributes
            let recipient = button.getAttribute('data-bs-whatever');

            // Use above variables to manipulate the DOM
        });
    </script>
    <script type="text/javascript">
        $().ready(function() {
            $('#present').change(function() {
                if ($(this).is(':checked')) {
                    $('#name-receive-row').removeClass('d-none');
                    $('#phone-receive-row').removeClass('d-none');
                } else {
                    $('#name-receive-row').addClass('d-none');
                    $('#phone-receive-row').addClass('d-none');
                }
            })
        })
    </script>
</div>




<?php $this->stop() ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>