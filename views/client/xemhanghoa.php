<?php

session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

?>
<?php

use App\Models\LoaiHang;

session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$loaihang = LoaiHang::All();

$tatcasp = $hh;

?>

<?php $this->layout("layouts/defaultClient", ["title" => "Hoa"]) ?>



<?php $this->start("page_specific_css") ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php $this->stop() ?>

<?php $this->start("page") ?>



<div class="main">




    <div class="category1 ">
        <div class="breadum-section">
            <div class="container-fluid">
                <div class="row py-4" style="border-radius: 4px; background-color: rgb(248, 248, 248);">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6 text-end">
                        <div class="page-title">
                            <h6 style="color: rgb(153, 153, 153); font-weight: 600; letter-spacing: 0.72px; margin-right: 50px;">
                                <a style="color: #555;" href="/client">TRANG CHỦ</a> / TẤT CẢ SẢN PHẨM
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <div class="row mb-5">
                        <h4 class="text-center" style="color: #555">Sắp xếp theo giá</h4>
                        <div class="row">
                            <a href="/client/xemhanghoa/giamdan" style="color:#555; " class="btn">Giá giảm dần</a>
                        </div>
                        <div class="row">
                            <a href="/client/xemhanghoa/tangdan" style="color:#555; " class="btn">Giá tăng dần</a>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <h4 class="text-center" style="color: #555">Tìm kiếm theo giá</h4>
                        <div class="row">
                            <a href="/client/xemhanghoa/duoi500" style="color:#555; " class="btn">Dưới 500,000 vnđ</a>
                        </div>
                        <div class="row">
                            <a href="/client/xemhanghoa/duoi800" style="color:#555; " class="btn"> 500,000 - 800,000 vnđ</a>
                        </div>
                        <div class="row">
                            <a href="/client/xemhanghoa/duoi1200" style="color:#555; " class="btn"> 800,000 - 1,200,000 vnđ</a>
                        </div>
                        <div class="row">
                            <a href="/client/xemhanghoa/duoi2000" style="color:#555; " class="btn"> 1,200,000 - 2,000,000 vnđ</a>
                        </div>
                        <div class="row">
                            <a href="/client/xemhanghoa/tren2000" style="color:#555; " class="btn">Trên 2,000,000 vnđ</a>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <h4 class="text-center" style="color: #555">Sắp xếp theo loại hoa</h4>
                        <?php foreach ($loaihang as $lh) : ?>
                            <div class="row">
                                <a href="/client/xemhanghoatheoloai/<?= $this->e($lh->MaLH) ?>" style="color:#555; " class="btn"><?= $this->e($lh->TenLH) ?></a>
                            </div>

                        <?php endforeach ?>

                    </div>

                </div>
                <div class="row col-9 mt-4">
                    <?php foreach ($tatcasp as $sp) : ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 text-left mt-4">
                            <div class="product-box mt-0">
                                <div class="img-wrapper">
                                    <div class="card" style="width: 100%; height: 32rem;  display: inline-block;; box-shadow: rgba(0, 0, 0, 0.12) 0px 3px 15px;">
                                        <a href="/client/chitiethanghoa/<?= $this->e($sp->MSHH) ?>">
                                            <form action="/client/themvaogio/<?= $this->e($sp->MSHH) ?>" method="POST">

                                                <div class="product-card" style="width: 100%; display: inline-block; border-radius: 10px;">
                                                    <img src="<?= $this->e($sp->HinhAnh) ?>" class="card-img-top img-fluid" alt="...">
                                                    <div class="product-effect">
                                                        <input type="text" name="HinhAnh" value="<?= $this->e($sp->HinhAnh) ?>" hidden>
                                                        <input type="text" name="TenHH" value="<?= $this->e($sp->TenHH) ?>" hidden>
                                                        <input type="number" name="Gia" value="<?= $this->e($sp->Gia) ?>" hidden>
                                                        <input type="text" name="MSHH" value="<?= $this->e($sp->MSHH) ?>" hidden>
                                                        <input type="number" name="qty" value="1" hidden>
                                                        <button type='submit'><i class="fas fa-cart-plus"></i></button>
                                                        <button><i class="fas fa-heart"></i></button>
                                                        <button><i class="fas fa-search"></i></button>
                                                    </div>
                                                </div>

                                                <div class="card-body" style=" position: absolute; bottom: 10px;">
                                                    <div class="rating hidden-sm col-md-6 d-inline" style="color:rgb(244, 129, 160)">
                                                        <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                        </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                        </i><i class="fa fa-star"></i>
                                                    </div>
                                                    <p class="card-text"><?= $this->e($sp->TenHH) ?></p>
                                                    <h5 class="card-title"><?= number_format($this->e($sp->Gia), 0, '', ',') ?>đ</h5>
                                                </div>
                                            </form>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>



</div>


<?php $this->stop() ?>

<?php $this->start("page_specific_js") ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php $this->stop() ?>