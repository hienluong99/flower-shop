<?php

session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

?>

<?php $this->layout("layouts/defaultClient", ["title" => "Trang chủ"]) ?>



<?php $this->start("page_specific_css") ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php $this->stop() ?>

<?php $this->start("page") ?>



<div class="main">

    <div>
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active ">
                    <img class="" style="height: 100vh;" src="https://hoatuoinetviet.com/_nuxt/img/slider_banner_1-min.94ec256.1905.png" alt="First
                            slide">
                    <div class="text-info">
                        <h4>
                            rose collection fresh
                        </h4>
                        <h1 class="mb-3">Hoa Việt</h1>
                        <a href="" class="btn-black" style="text-decoration: none;">Buy Now</a>

                    </div>
                </div>
                <div class="carousel-item">
                    <img class="" style="height: 100vh;" src="https://hoatuoinetviet.com/_nuxt/img/slider_banner_2-min.5e7eef3.1905.png" alt="Second slide">
                    <div class="text-info">
                        <h4>
                            rose collection fresh
                        </h4>
                        <h1 class="mb-3">Hoa Việt</h1>
                        <a href="" class="btn-black" style="text-decoration: none;">Buy Now</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="" style="height: 100vh;" src="https://hoatuoinetviet.com/_nuxt/img/slider_banner_1-min.94ec256.1905.png" alt="Third slide">
                    <div class="text-info">
                        <h4>
                            rose collection fresh
                        </h4>
                        <h1 class="mb-3">Hoa Việt</h1>
                        <a href="" class="btn-black" style="text-decoration: none;">Buy Now</a>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div>
        <section>
            <div class="container my-4">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="title">
                            <h4 class="text-uppercase">Ve Hoa Viet</h4>
                        </div>
                        <div class="about-text">
                            <p>
                                Được thành lập từ tháng 1/2022, đến nay Hoa Nét Việt đang trở thành sự lựa chọn hàng
                                đầu
                                của quý khách hàng, quý doanh nghiệp mỗi khi cần đặt tặng hoa tươi chúc mừng, kệ hoa
                                sự
                                kiện trên phạm vi cả nước.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
                <div class="col">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="category-block">
                                <a href="/tat-ca-san-pham" class="js-tilt">
                                    <div class="category-image"><img src="/images/garden-daisy.d3688b7.256.png" alt="" class="img-fluid lazyloaded"></div>
                                </a>
                                <div class="category-detail">
                                    <a href="">
                                        <h5>
                                            HÀNH TRÌNH PHÁT TRIỂN
                                        </h5>
                                    </a>
                                    <h6>
                                        Năm 2014, từ cơ sở đầu tiên tại Thành phố Hồ Chí Minh, Hoa Nét Việt sau hơn
                                        7
                                        năm phát triển đã mở rộng hệ thống chi nhánh ra toàn quốc.
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="category-block">
                                <a href="/tat-ca-san-pham" class="js-tilt">
                                    <div class="category-image"><img src="/images/natural-flowers.fb0695a.256.png" alt="" class="img-fluid lazyloaded"></div>
                                </a>
                                <div class="category-detail">
                                    <a href="">
                                        <h5>
                                            SỨ MỆNH
                                        </h5>
                                    </a>
                                    <h6>
                                        Với thông điệp "NỖ LỰC VÌ BẠN", Hoa Nét Việt hướng đến một dịch vụ chuyên
                                        nghiệp
                                        trong việc truyền tải thông điệp, cảm xúc từ người tặng gửi đến người nhận
                                        trên
                                        mọi miền đất nước.
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="category-block">
                                <a href="/tat-ca-san-pham" class="js-tilt">
                                    <div class="category-image"><img src="/images/garden-rose.0e2f3a3.256.png" alt="" class="img-fluid lazyloaded"></div>
                                </a>
                                <div class="category-detail">
                                    <a href="">
                                        <h5>
                                            TẦM NHÌN
                                        </h5>
                                    </a>
                                    <h6>
                                        Cung cấp thành công, toàn diện điện hoa trong nước và mở rộng ra thị trường
                                        quốc
                                        tế. Phát triển các ngành dịch vụ phụ để hỗ trợ cho việc cung cấp hoa và quà
                                        tặng.
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="category-block">
                                <a href="/tat-ca-san-pham" class="js-tilt">
                                    <div class="category-image"><img src="/images/rose.3522ce9.256.png" alt="" class="img-fluid lazyloaded"></div>
                                </a>
                                <div class="category-detail">
                                    <a href="">
                                        <h5>
                                            CAM KẾT
                                        </h5>
                                    </a>
                                    <h6>
                                        Hoa Nét Việt quyết tâm không ngừng học hỏi và sáng tạo để cho ra đời những
                                        tác
                                        phẩm nghệ thuật cắm hoa đặc sắc, ấn tượng và độc đáo nhất.
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="product" style="background-color: #FFF2F4;">
        <section>
            <div class="container py-5">
                <h4 class="title">
                    Sản phẩm nổi bật
                </h4>
            </div>
            <div class="container effect-product pb-5">
                <div class="row">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active pb-5">
                                <div class="row">
                                    <?php for ($i = 0; $i < 4; $i++) : ?>
                                        <div class="col-lg-3  col-sm-6 mb-4">
                                            <div class="card" style="width: 100%; height: 34.375rem; display: inline-block;; box-shadow: rgba(0, 0, 0, 0.12) 0px 3px 15px; ">
                                                <a href="/client/chitiethanghoa/<?= $this->e($sp_noi_bat[$i]->MSHH) ?>">
                                                    <form action="/client/themvaogio/<?= $this->e($sp_noi_bat[$i]->MSHH) ?>" method="POST">
                                                        <div class="product-card" style="width: 100%; display: inline-block; border-radius: 10px;">
                                                            <img src="<?= $this->e($sp_noi_bat[$i]->HinhAnh) ?>" class="card-img-top img-fluid" alt="...">
                                                            <div class="product-effect">
                                                                <input type="text" name="HinhAnh" value="<?= $this->e($sp_noi_bat[$i]->HinhAnh) ?>" hidden>
                                                                <input type="text" name="TenHH" value="<?= $this->e($sp_noi_bat[$i]->TenHH) ?>" hidden>
                                                                <input type="number" name="Gia" value="<?= $this->e($sp_noi_bat[$i]->Gia) ?>" hidden>
                                                                <input type="text" name="MSHH" value="<?= $this->e($sp_noi_bat[$i]->MSHH) ?>" hidden>
                                                                <input type="number" name="qty" value="1" hidden>
                                                                <button type='submit'><i class="fas fa-cart-plus"></i></button>
                                                                <button><i class="fas fa-heart"></i></button>
                                                                <button><i class="fas fa-search"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="card-body " style=" position: absolute; bottom: 10px;">
                                                            <div class="rating hidden-sm col-md-6 d-inline">
                                                                <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                                </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                                </i><i class="fa fa-star"></i>
                                                            </div>
                                                            <p class="card-text"><?= $this->e($sp_noi_bat[$i]->TenHH) ?></p>
                                                            <h5 class="card-title"><?= number_format($this->e($sp_noi_bat[$i]->Gia), 0, '', ',') ?> đ</h5>
                                                        </div>
                                                    </form>
                                                </a>
                                            </div>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                            <div class="carousel-item pb-5">
                                <div class="row">
                                    <?php for ($i = 4; $i < 8; $i++) : ?>
                                        <div class="col-lg-3  col-sm-6 mb-4">
                                            <div class="card" style="width: 100%; height: 34.375rem; display: inline-block;; box-shadow: rgba(0, 0, 0, 0.12) 0px 3px 15px; ">
                                                <a href="/client/chitiethanghoa/<?= $this->e($sp_noi_bat[$i]->MSHH) ?>">
                                                    <form action="/client/themvaogio/<?= $this->e($sp_noi_bat[$i]->MSHH) ?>" method="POST">
                                                        <div class="product-card" style="width: 100%; display: inline-block; border-radius: 10px;">
                                                            <img src="<?= $this->e($sp_noi_bat[$i]->HinhAnh) ?>" class="card-img-top img-fluid" alt="...">
                                                            <div class="product-effect">
                                                                <input type="text" name="HinhAnh" value="<?= $this->e($sp_noi_bat[$i]->HinhAnh) ?>" hidden>
                                                                <input type="text" name="TenHH" value="<?= $this->e($sp_noi_bat[$i]->TenHH) ?>" hidden>
                                                                <input type="number" name="Gia" value="<?= $this->e($sp_noi_bat[$i]->Gia) ?>" hidden>
                                                                <input type="text" name="MSHH" value="<?= $this->e($sp_noi_bat[$i]->MSHH) ?>" hidden>
                                                                <input type="number" name="qty" value="1" hidden>
                                                                <button type='submit'><i class="fas fa-cart-plus"></i></button>
                                                                <button><i class="fas fa-heart"></i></button>
                                                                <button><i class="fas fa-search"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="card-body " style=" position: absolute; bottom: 10px;">
                                                            <div class="rating hidden-sm col-md-6 d-inline">
                                                                <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                                </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                                </i><i class="fa fa-star"></i>
                                                            </div>
                                                            <p class="card-text"><?= $this->e($sp_noi_bat[$i]->TenHH) ?></p>
                                                            <h5 class="card-title"><?= number_format($this->e($sp_noi_bat[$i]->Gia), 0, '', ',') ?> đ</h5>
                                                        </div>
                                                    </form>
                                                </a>
                                            </div>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="category1 ">
        <div class="container">
            <div class="title mb-3">
                <h4>HỘP GỖ</h4>
            </div>
            <div class="text-description">
                <ul class="text-center">
                    <li>Hoa luôn mang vẻ đẹp kỳ diệu và chứa đựng biết bao thông điệp ý nghĩa, hoa còn là biểu trưng
                        dành tặng phái nữ.</li>
                    <li>Bởi thế, đây là phương tiện giúp mọi người gửi gắm tình yêu với người thân, bạn bè. Nhu cầu
                        tặng
                        hoa ngày càng nhiều, do
                        đó, ngoài những mẫu hoa bó thường thấy thì hiện nay việc tặng hoa cắm hộp gỗ cũng là cách ấn
                        tượng giúp bạn truyền tải
                        lời yêu thương.</li>
                    <li>Tùy vào đối tượng và tính chất của từng sự kiện, chọn lựa hoa hộp gỗ cũng sẽ khác nhau về
                        loại
                        hoa, màu sắc, kiểu dáng.
                        Tại Hoa tươi Nét Việt, hoa cắm hộp gỗ là mẫu hoa sang trọng, kiểu dáng hộp gỗ dễ dàng kết
                        hợp
                        với nhiều loại hoa khác
                        nhau. Đồng thời, hộp gỗ cũng chính là điểm nhấn của mẫu hoa đẹp này.</li>
                </ul>
            </div>
            <div class="row mt-4">
                <?php foreach ($sp_hopgo as $hopgo) : ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 text-left mt-4">
                        <div class="product-box mt-0">
                            <div class="img-wrapper">
                                <div class="card" style="width: 100%; height: 34.375rem;  ;display: inline-block;; box-shadow: rgba(0, 0, 0, 0.12) 0px 3px 15px;">
                                    <a href="/client/chitiethanghoa/<?= $this->e($hopgo->MSHH) ?>">
                                        <form action="/client/themvaogio/<?= $this->e($hopgo->MSHH) ?>" method="POST">

                                            <div class="product-card" style="width: 100%; display: inline-block; border-radius: 10px;">
                                                <img src="<?= $this->e($hopgo->HinhAnh) ?>" class="card-img-top img-fluid" alt="...">
                                                <div class="product-effect">
                                                    <input type="text" name="HinhAnh" value="<?= $this->e($hopgo->HinhAnh) ?>" hidden>
                                                    <input type="text" name="TenHH" value="<?= $this->e($hopgo->TenHH) ?>" hidden>
                                                    <input type="number" name="Gia" value="<?= $this->e($hopgo->Gia) ?>" hidden>
                                                    <input type="text" name="MSHH" value="<?= $this->e($hopgo->MSHH) ?>" hidden>
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
                                                <p class="card-text"><?= $this->e($hopgo->TenHH) ?></p>
                                                <h5 class="card-title"><?= number_format($this->e($hopgo->Gia), 0, '', ',') ?>đ</h5>
                                            </div>
                                        </form>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="col-12 text-center mt-5"><a href="/client/xemhanghoa
                " style="text-decoration: none;" class="btn-black">Xem tất cả
                        sản phẩm
                    </a></div>
            </div>
        </div>
    </div>
    <div class="category1 ">
        <div class="container">
            <div class="title mb-3">
                <h4>sinh nhật</h4>
            </div>
            <div class="text-description">
                <ul class="text-center">
                    <li>Sinh nhật là ngày quan trọng của mỗi người. Đây không chỉ là ngày đặc biệt chỉ đến duy nhất
                        một
                        lần trong năm mà còn là
                        dịp để bạn bày tỏ lời yêu thương đến đấng sinh thành. Một bó hoa tươi thắm cùng chiếc bánh
                        gato
                        nhỏ xinh và bài hát chúc
                        mừng sinh nhật được mọi người quây quần hát vang, thổi nến, chính là những thứ không thể
                        vắng
                        mặt trong buổi tiệc chúc
                        mừng của bạn.</li>
                    <li>Để tìm được bó hoa sinh nhật đẹp tặng người thân, cửa hàng Hoa tươi Nét Việt luôn có rất
                        nhiều
                        lựa chọn dành cho bạn. Từ
                        đơn giản đến sang trọng, từ cổ điển đến cách tân, tất cả được thợ hoa kết hợp tỉ mỉ để tạo
                        nên
                        bó hoa đẹp nhất cho ngày
                        ý nghĩa nhất mà bạn muốn gửi trao người thân yêu.</li>
                </ul>
            </div>
            <div class="row mt-4">
                <?php foreach ($sp_sinhnhat as $sinhnhat) : ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 text-left mt-4">
                        <div class="product-box mt-0">
                            <div class="img-wrapper">
                                <div class="card" style="background-color: white;  width: 100%; height: 34.375rem; display: inline-block; box-shadow: rgba(0, 0, 0, 0.12) 0px 3px 15px; ">
                                    <a href="/client/chitiethanghoa/<?= $this->e($sinhnhat->MSHH) ?>">
                                        <form action="/client/themvaogio/<?= $this->e($sinhnhat->MSHH) ?>" method="POST">
                                            <div class="product-card" style="width: 100%;  display: inline-block; border-radius: 10px;">
                                                <img src="<?= $this->e($sinhnhat->HinhAnh) ?>" class="card-img-top img-fluid" alt="...">
                                                <div class="product-effect">
                                                    <input type="text" name="HinhAnh" value="<?= $this->e($sinhnhat->HinhAnh) ?>" hidden>
                                                    <input type="text" name="TenHH" value="<?= $this->e($sinhnhat->TenHH) ?>" hidden>
                                                    <input type="number" name="Gia" value="<?= $this->e($sinhnhat->Gia) ?>" hidden>
                                                    <input type="text" name="MSHH" value="<?= $this->e($sinhnhat->MSHH) ?>" hidden>
                                                    <input type="number" name="qty" value="1" hidden>
                                                    <button type='submit'><i class="fas fa-cart-plus"></i></button>
                                                    <button><i class="fas fa-heart"></i></button>
                                                    <button><i class="fas fa-search"></i></button>
                                                </div>
                                            </div>

                                            <div class="card-body" style="width:100%;  position: absolute; bottom: 0px;">
                                                <div class="rating hidden-sm col-md-6 d-inline" style="color:rgb(244, 129, 160)">
                                                    <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="fa fa-star"></i>
                                                </div>
                                                <p class="card-text"><?= $this->e($sinhnhat->TenHH) ?></p>
                                                <h5 class="card-title"><?= $this->e(number_format($this->e($sinhnhat->Gia), 0, '', ',')) ?> đ</h5>
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
    <div class="category1 ">
        <div class="container">
            <div class="title mb-3">
                <h4>Hoa Baby</h4>
            </div>
            <div class="text-description">
                <ul class="text-center">
                    <li>Những cành hoa baby với thân cây nhỏ nhắn, từng lớp hoa mỏng manh lại mang ý nghĩa chứa đựng
                        tượng trưng cho một tình
                        yêu vĩnh cửu, cho sự tự do của những cô nàng cá tính và là sợi dây kết nối với những người
                        yêu
                        thương.bó hoa sinh nhật đẹp tặng người thân, cửa hàng Hoa tươi Nét Việt luôn có rất nhiều
                        lựa chọn dành cho bạn. Từ
                        đơn giản đến sang trọng, từ cổ điển đến cách tân, tất cả được thợ hoa kết hợp tỉ mỉ để tạo
                        nên
                        bó hoa đẹp nhất cho ngày
                        ý nghĩa nhất mà bạn muốn gửi trao người thân yêu.</li>
                    <li>Hoa baby có màu trắng, màu hồng, xanh - biểu trưng của sự thuần khiết. Bằng nhiều ý nghĩa
                        khác
                        nhau, mẫu hoa baby đã trở
                        thành món quà chào đón những em bé sơ sinh như là lời chúc bình an, ngoan ngoãn.</li>
                </ul>
            </div>
            <div class="row mt-4">
                <?php foreach ($sp_baby as $baby) : ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 text-left mt-4">
                        <div class="product-box mt-0">
                            <div class="img-wrapper">
                                <div class="card" style="width: 100%; height: 34.375rem;  ;display: inline-block;; box-shadow: rgba(0, 0, 0, 0.12) 0px 3px 15px;">
                                    <a href="/client/chitiethanghoa/<?= $this->e($baby->MSHH) ?>">
                                        <form action="/client/themvaogio/<?= $this->e($baby->MSHH) ?>" method="POST">
                                            <div class="product-card" style="width: 100%; display: inline-block; border-radius: 10px;">
                                                <img src="<?= $this->e($baby->HinhAnh) ?>" class="card-img-top img-fluid" alt="...">
                                                <div class="product-effect">
                                                    <input type="text" name="HinhAnh" value="<?= $this->e($baby->HinhAnh) ?>" hidden>
                                                    <input type="text" name="TenHH" value="<?= $this->e($baby->TenHH) ?>" hidden>
                                                    <input type="number" name="Gia" value="<?= $this->e($baby->Gia) ?>" hidden>
                                                    <input type="text" name="MSHH" value="<?= $this->e($baby->MSHH) ?>" hidden>
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
                                                <p class="card-text"><?= $this->e($baby->TenHH) ?></p>
                                                <h5 class="card-title"><?= ($this->e(number_format($this->e($baby->Gia), 0, '', ','))) ?> đ</h5>
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
    <div class="category1 ">
        <div class="container">
            <div class="title mb-3">
                <h4>Chia buồn</h4>
            </div>
            <div class="text-description">
                <ul class="text-center">
                    <li>Tang lễ là việc không ai muốn xảy ra, là ngày không một ai muốn nhắc đến. Tiếc thay, đây là
                        việc
                        thường nhật của vòng
                        xoay luân hồi, chính vì thế mỗi người trong chúng ta luôn tiếc thương và rồi học cách chấp
                        nhận
                        những điều không may đã
                        xảy đến..</li>
                    <li>Để chia buồn, đồng cảm với gia đình người đã khuất, ngoài cách phúng viếng tiền bạc thì việc
                        gửi
                        một lẵng hoa/ vòng hoa
                        tang lễ là cách bạn cùng họ san sẻ nỗi đau. Hoa tươi Nét Việt hiểu rằng, mỗi sự mất mát ra
                        đi là
                        là những sự tiếc thương
                        ở lại. Do đó, mỗi màu hoa chúng tôi lựa chọn đều mang màu đơn sắc, màu nhạt không rực rỡ như
                        các
                        loại hoa dùng tặng
                        khác.</li>
                </ul>
            </div>
            <div class="row mt-4">
                <?php foreach ($sp_chiabuon as $chiabuon) : ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 text-left mt-4">
                        <div class="product-box mt-0">
                            <div class="img-wrapper">
                                <div class="card" style="width: 100%; height: 34.375rem;  ;display: inline-block;; box-shadow: rgba(0, 0, 0, 0.12) 0px 3px 15px;">
                                    <a href="/client/chitiethanghoa/<?= $this->e($chiabuon->MSHH) ?>">
                                        <form action="/client/themvaogio/<?= $this->e($chiabuon->MSHH) ?>" method="POST">
                                            <div class="product-card" style="width: 100%; display: inline-block; border-radius: 10px;">
                                                <img src="<?= $this->e($chiabuon->HinhAnh) ?>" class="card-img-top img-fluid" alt="...">
                                                <div class="product-effect">
                                                    <input type="text" name="HinhAnh" value="<?= $this->e($chiabuon->HinhAnh) ?>" hidden>
                                                    <input type="text" name="TenHH" value="<?= $this->e($chiabuon->TenHH) ?>" hidden>
                                                    <input type="number" name="Gia" value="<?= $this->e($chiabuon->Gia) ?>" hidden>
                                                    <input type="text" name="MSHH" value="<?= $this->e($chiabuon->MSHH) ?>" hidden>
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
                                                <p class="card-text"><?= $this->e($chiabuon->TenHH) ?></p>
                                                <h5 class="card-title"><?= $this->e(number_format($this->e($chiabuon->Gia), 0, '', ',')) ?> đ</h5>
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

    <section>
        <div class="full-banner text-center p-center">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="banner-contain">
                            <h2 class="banner-h2" style="color: rgb(244, 129, 160);">awesome</h2>
                            <h3 class="banner-h3" style="color: rgb(68, 68, 68);">flower shop</h3>
                            <h4 class="banner-h4" style="color: rgb(170, 170, 170);">winter special</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="category1 ">
        <div class="container">
            <div class="title mb-3">
                <h4>KHAI TRƯƠNG</h4>
            </div>
            <div class="text-description">
                <ul class="text-center">
                    <li>Nhận được lời mời tham dự khai trương từ phía bạn bè, đối tác chắc hẳn bạn sẽ đau đầu vì
                        không
                        biết chọn món quà gì phù
                        hợp. Đừng lo bạn nhé, một kệ hoa khai trương tại Hoa tươi Nét Việt sẽ là món quà chúc mừng
                        không
                        chỉ làm hài lòng bạn mà
                        còn cho cả gia chủ..</li>
                    <li>Để tạo ra được những lẵng hoa khai trương đẹp dành tặng khách hàng, bên cạnh những loại hoa
                        tươi
                        đủ sắc màu được chúng
                        tôi vận chuyển từ hệ thống nông trại hoa , còn là cách tạo hình, thêm thắt sao cho bắt mắt.
                        Chắc
                        chắn vòng hoa/ kệ hoa
                        khai trương bạn dành tặng sẽ thu hút được sự chú ý của khách tham dự.</li>
                </ul>
            </div>
            <div class="row mt-4">
                <?php foreach ($sp_khaitruong as $khaitruong) : ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 text-left mt-4">
                        <div class="product-box mt-0">
                            <div class="img-wrapper">
                                <div class="card" style="width: 100%; height: 34.375rem;  ;display: inline-block;; box-shadow: rgba(0, 0, 0, 0.12) 0px 3px 15px;">
                                    <a href="/client/chitiethanghoa/<?= $this->e($khaitruong->MSHH) ?>">
                                        <form action="/client/themvaogio/<?= $this->e($khaitruong->MSHH) ?>" method="POST">
                                            <div class="product-card" style="width: 100%; display: inline-block; border-radius: 10px;">
                                                <img src="<?= $this->e($khaitruong->HinhAnh) ?>" class="card-img-top img-fluid" alt="...">
                                                <div class="product-effect">
                                                    <input type="text" name="HinhAnh" value="<?= $this->e($khaitruong->HinhAnh) ?>" hidden>
                                                    <input type="text" name="TenHH" value="<?= $this->e($khaitruong->TenHH) ?>" hidden>
                                                    <input type="number" name="Gia" value="<?= $this->e($khaitruong->Gia) ?>" hidden>
                                                    <input type="text" name="MSHH" value="<?= $this->e($khaitruong->MSHH) ?>" hidden>
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
                                                <p class="card-text"><?= $this->e($khaitruong->TenHH) ?></p>
                                                <h5 class="card-title"><?= $this->e(number_format($this->e($khaitruong->Gia), 0, '', ',')) ?>đ</h5>
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
</div>


<?php $this->stop() ?>

<?php $this->start("page_specific_js") ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php $this->stop() ?>