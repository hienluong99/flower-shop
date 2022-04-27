<?php

session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

?>

<?php $this->layout("layouts/defaultClient", ["title" => "Chi tiết sản phẩm"]) ?>

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
                            <a style="color: #555;" href="/client">TRANG CHỦ</a> / HOA CHIA BUỒN
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-10 col-12">
                                <div class="product-slick ">
                                    <div class="main-img" style="height: 500px; width: 100%; display: flex; align-items: center; justify-content: center;">
                                        <img class="img-fluid" src="<?= $this->e($hh->HinhAnh) ?>" style="max-width: fit-content; max-height: 500px;" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-2">
                                <div class="d-inline-block">
                                    <div class="rounded my-2">
                                        <img src="<?= $this->e($hh->HinhAnh) ?>" style="width: 80px;" alt="">
                                    </div>
                                    <div class="rounded my-2">
                                        <img src="<?= $this->e($hh->HinhAnh) ?>" style="width: 80px;" alt="">
                                    </div>
                                    <div class="rounded my-2">
                                        <img src="<?= $this->e($hh->HinhAnh) ?>" style="width: 80px;" alt="">
                                    </div>
                                    <div class="rounded my-2">
                                        <img src="<?= $this->e($hh->HinhAnh) ?>" style="width: 80px;" alt="">
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-5">
                        <div class="product-right">
                            <h1 style="font-size: 20px;"><?= $this->e($hh->TenHH) ?></h1>
                        </div>
                        <div class="border-product" style="padding-bottom: 0px;">
                            <h3 id="product_price"><?= number_format($this->e($hh->Gia), 0, '', ',') ?> đ</h3>
                        </div>
                        <form action="/muahang" method="post">
                            <div class="qty-box mt-4 mb-2">
                                <div class="row mx-0">
                                    <div class="col-md-6 col-6">
                                        <input type="text" name="MSHH" value="<?= $this->e($hh->MSHH) ?>" hidden>
                                        <input type="text" name="HinhAnh" value="<?= $this->e($hh->HinhAnh) ?>" hidden>
                                        <input type="text" name="TenHH" value="<?= $this->e($hh->TenHH) ?>" hidden>
                                        <input type="number" name="Gia" value="<?= $this->e($hh->Gia) ?>" hidden>
                                        <input type="text" name="MSHH" value="<?= $this->e($hh->MSHH) ?>" hidden>
                                        <input type="number" name="qty" value="1" hidden>
                                        <div class="md-form md-outline" style="min-height: 50px;">
                                            <label for="ngaynhan">Ngày nhận</label>
                                            <input type="date" id="default-date-picker" name="ngaynhan" class="form-control px-3" placeholder="Select date">

                                        </div>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <div class="md-form md-outline">
                                            <label for="gionhan">Giờ nhận</label>

                                            <input type="time" id="default-time-picker" name="gionhan" class="form-control" placeholder="Select time">
                                        </div>

                                    </div>
                                </div>
                                <div class="row mx-0 my-4">
                                    <div class="col-md-7 col-12 d-inline-block">
                                        <label for="loinhan">Lời nhắn</label>
                                        <textarea name="loinhan" id="" rows="4" cols="50" placeholder="Gửi lời nhăn..."></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="d-flex " style="align-items: center; margin-left: 20px;">
                                        <button type="submit" class="btn-buy">
                                            MUA NGAY
                                        </button>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-12 my-3" style="font-size: large;">Gọi cho chúng tôi qua
                                        HOTLINE:</div>
                                    <div class="col-5 d-flex mx-2" style="justify-content: center; align-items: center; border: 1px solid #999; border-radius: 2px;">
                                        <a href="tel:0934823469" class="text-bold hotline mr-2" style="color: rgb(250, 134, 155); caret-color: rgb(250, 134, 155); font-size: 20px;"><span>0934823469</span></a>
                                    </div>
                                    <div class="col-5 d-flex mx-2" style="justify-content: center; align-items: center; border: 1px solid #999; border-radius: 2px;">
                                        <a href="tel:0934823469" class="text-bold hotline mr-2" style="color: rgb(250, 134, 155); caret-color: rgb(250, 134, 155); font-size: 20px;"><span>0934823469</span></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-12 product-related mb-3">
                <h2 class="text-center" style="font-size: 20px; font-weight: 600; letter-spacing: 0.25px;">SẢN
                    PHẨM TƯƠNG TỰ</h2>
            </div>
            <hr>
        </div>

        <div class="container effect-product pb-5">
            <div class="row">
                <?php foreach ($sp_tuongtu as $tuongtu) : ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 text-left mt-4">
                        <div class="product-box mt-0">
                            <div class="img-wrapper">
                                <div class="card" style="width: 100%; height: 34.375rem;  ;display: inline-block;; box-shadow: rgba(0, 0, 0, 0.12) 0px 3px 15px;">
                                    <a href="/client/chitiethanghoa/<?= $this->e($tuongtu->MSHH) ?>">
                                        <form action="/client/themvaogio/<?= $this->e($tuongtu->MSHH) ?>" method="POST">
                                            <div class="product-card" style="width: 100%; display: inline-block; border-radius: 10px;">
                                                <img src="<?= $this->e($tuongtu->HinhAnh) ?>" class="card-img-top img-fluid" alt="...">
                                                <div class="product-effect">
                                                    <input type="text" name="HinhAnh" value="<?= $this->e($tuongtu->HinhAnh) ?>" hidden>
                                                    <input type="text" name="TenHH" value="<?= $this->e($tuongtu->TenHH) ?>" hidden>
                                                    <input type="number" name="Gia" value="<?= $this->e($tuongtu->Gia) ?>" hidden>
                                                    <input type="text" name="MSHH" value="<?= $this->e($tuongtu->MSHH) ?>" hidden>
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
                                                <p class="card-text"><?= $this->e($tuongtu->TenHH) ?></p>
                                                <h5 class="card-title"><?= $this->e(number_format($this->e($tuongtu->Gia), 0, '', ',')) ?>đ</h5>
                                            </div>
                                        </form>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="col-12 text-center mt-5"><a href="/client/xemhanghoa" style="text-decoration: none;" class="btn-black">Xem tất cả
                        sản phẩm
                    </a></div>
            </div>
        </div>
    </div>
</section>

<?php $this->stop() ?>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>