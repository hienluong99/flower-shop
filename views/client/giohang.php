<?php

use App\Models\HangHoa;

session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

?>

<?php $this->layout("layouts/defaultClient", ["title" => "Giỏ hàng"]) ?>

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
                            <a style="color: #555;" href="/client">TRANG CHỦ</a> / GIỎ HÀNG
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <table class="table ">
            <thead style="background-color: rgb(250, 134, 155);">
                <tr>
                    <th class="text-center">Hình ảnh</th>
                    <th class="text-center">Sản phẩm</th>
                    <th class="text-center">Giá</th>
                    <th class="text-center">Số lượng</th>
                    <th class="text-center">Tổng</th>
                    <th class="text-center"></th>
                </tr>
            </thead>
            <?php $tongtien = 0;
            $i = 0;
            foreach ($giohang as $gh) : ?>
                <tr>
                    <td class="col text-center"><a>
                            <img class="text-center img-responsive img-fluid" style="width: 70px; height:100px" src="<?= $this->e($gh['HinhAnh']) ?>" alt="">

                        </a></td>
                    <td class="col text-center"><?= $this->e($gh['TenHH']) ?></td>
                    <td class="col text-center"><?= number_format($this->e($gh['Gia']), 0, '', ',') ?></td>
                    <td class="col text-center">
                        <a href="/client/giamsoluong/<?php echo $i ?>"> <button class="btn">
                                <i class="fa fa-minus" aria-hidden="true"></i>
                            </button></a>
                        <input type="number" min="1" max="<?= $gh['TonKho'] ?>" disabled="disabled" value="<?= $this->e($gh['qty']);  ?>" style="width: 50px; text-align: center;">
                        <a href="/client/themsoluong/<?php echo $i ?>"> <button class="btn">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button></a>
                    </td>
                    <td class="text-center"><?= number_format($this->e($gh['Gia'] * $gh['qty']), 0, '', ',')  ?> đ</td>
                    <?php $tongtien += $gh['Gia'] * $gh['qty']; ?>
                    <form action="/client/xoagiohang/<?php echo $i ?>" method="get">
                        <td class="text-center"><button class="btn " type="submit">
                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                            </button></td>

                    </form>
                    </a>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

        </table>
        <table class="table cart-table table-responsive-md">
            <tfoot>
                <tr>
                    <td class="col text-center">
                        <h4>Tổng thanh toán:</h4>
                    </td>
                    <td>
                        <!---->
                        <h2>
                            <?= number_format($tongtien, 0, '', ',')  ?> vnđ
                        </h2>
                    </td>
                </tr>
            </tfoot>
        </table>
        <div class="col-12 text-end mt-1"><a href="/client/"><button class="btn btn-primary ">Tiếp tục mua hàng</button></a>
            <a href="/client/thanhtoan"><button class="btn btn-success ">Thanh toán</button></a>
        </div>

    </div>
</div>




<?php $this->stop() ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>