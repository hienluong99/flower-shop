<?php

use App\Models\LoaiHang;

$loaihang = LoaiHang::All();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/css/client.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title> <?= $this->e($title) ?></title>

    <?= $this->section("page_specific_css") ?>
</head>

<body>

    <div class="container-fluid col-2 header">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
            <a href="#" class="navbar-brand">
                <img style="height: 49px; width: 150px;" src="/images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto ml-4">
                    <li class="nav-item">
                        <a href="/client" class="nav-link">TRANG CHỦ</a>
                    </li>
                    <li class="nav-item">
                        <a href="/client/gioithieu" class="nav-link">GIỚI THIỆU</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            SẢN PHẨM
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php foreach ($loaihang as $lh) : ?>
                                <li> <a href="/client/xemhanghoatheoloai/<?= $this->e($lh->MaLH) ?>" style="color:#555; " class="btn"><?= $this->e($lh->TenLH) ?></a></li>

                            <?php endforeach ?>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="/client/lienhe" class="nav-link">LIÊN HỆ</a>
                    </li>
                    <li>
                        <a href="/client/giohang" class="nav-link">
                            <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                            <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) : ?>
                                <span style="position: absolute; padding:5px; background-color:red; border-radius: 40%; font-size: 10px; font-weight: bold; top:15%; right:25px; color:white"><?php echo count($_SESSION['cart']); ?></span>

                            <?php endif; ?>
                        </a>
                    </li>

                </ul>

            </div>
        </nav>
    </div>


    <?= $this->section("page") ?>


    <div class="shopify-section" style="background-color: rgba(231, 227, 227, 0.5);">
        <footer class="bg-img-footer">
            <section class="light-layout">
                <div class="container">
                    <div class="row footer-theme">
                        <div class="col-lg-3 col-md-6 offset-right">
                            <div class="footer-contact" style="">
                                <h4>Hoa net viet</h4>
                                <div>
                                    <ul>
                                        <li>CTy TNHH Đầu Tư Thương Mại Và Dịch Vụ Điện Hoa Nét Việt sở hữu chuỗi cửa
                                            hàng hoa tươi khắp cả nước!</li>
                                        <li>Slogan: Nỗ lực vì bạn!</li>
                                        <li>Chúng tôi sẽ cố gắng tận tụy từng ngày để đưa tới khách hàng sản phẩm và
                                            dịch vụ tốt nhất</li>
                                    </ul>
                                    <p>&nbsp;</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="sub-title">
                                <div class="footer-title">
                                    <h4 class="lang_trans" style="color: #111111">
                                        HỖ TRỢ
                                    </h4>
                                </div>
                                <div class="footer-content">
                                    <ul class="contact-list" style="padding-left: 0; ">
                                        <li style="color: #222222; padding-left:0px;"><a href="/chinh-sach-bao-mat" class=""><span class="lang_trans">Chính
                                                    sách bảo mật thông tin</span></a></li>
                                        <li style="color: #222222; padding-left:0px;"><a href="/chinh-sach-van-chuyen" class=""><span class="lang_trans">Chính sách Vận chuyển - Đổi/ Trả
                                                    hàng</span></a></li>
                                        <li style="color: #222222; padding-left:0px;"><a href="/huong-dan-dat-hang" class=""><span class="lang_trans">Hướng
                                                    dẫn đặt hàng</span></a></li>
                                        <li style="color: #222222; padding-left:0px;"><a href="/chinh-sach-thanh-toan" class=""><span class="lang_trans">Chính sách thanh toán</span></a></li>
                                        <li style="color: #222222; padding-left:0px;"><a href="/thac-mac-khieu-nai" class=""><span class="lang_trans">Thắc
                                                    mắc khiếu nại</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="sub-title">
                                <div class="footer-title">
                                    <h4 data-trans="#footer1_1580379742872_info_title" class="lang_trans" style="color: #111111">
                                        GIỚI THIỆU
                                    </h4>
                                </div>
                                <div class="footer-content">
                                    <ul class="contact-list" style="padding-left: 0 ">
                                        <li style="color: #222222; padding-left:0px;"><a href="/gioi-thieu" class=""><span class="lang_trans">Giới thiệu</span></a></li>
                                        <li style="color: #222222; padding-left:0px;"><a href="/cau-hoi-thuong-gap" class=""><span class="lang_trans">Câu hỏi thường gặp</span></a></li>
                                        <li style="color: #222222; padding-left:0px;"><a href="/huong-dan-thanh-toan" class=""><span class="lang_trans">Hướng dẫn thanh toán</span></a></li>
                                        <li style="color: #222222; padding-left:0px;"><a href="/tai-khoan-thanh-toan" class=""><span class="lang_trans">Tài khoản thanh toán</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="sub-title">
                                <div class="footer-title">
                                    <h4 class="lang_trans" style="color: #111111">
                                        LIÊN HỆ
                                    </h4>
                                </div>
                                <div class="footer-contant">
                                    <ul class="contact-list pl-0">
                                        <li class="pl-0" style="color: #222222; "><span>
                                                HOT LINE
                                            </span></li>
                                        <li style="color: #222222;"><i class="fa fa-phone"></i> <a href="tel:0903094459" class="text-bold hotline">0903094459</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="sub-footer pt-3" style="background-color: #111111;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-sm-12" style="color:#FFF2F4;">
                            <p>
                                Copyright ©Luong Hien Reserved.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script>
        $('#navbarSupportedContent').on('shown.bs.modal', function() {
            $('#navbarSupportedContent').trigger('focus')
        })
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
    <script>
        feather.replace()
    </script>
    <script type="text/javascript">
        $().ready(function() {
            $(window).scroll(function() {
                if (window.scrollY > 0) {
                    $('.navbar').addClass('navbar-scroll')
                } else {
                    $('.navbar').removeClass('navbar-scroll')
                }
            })
        })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <?= $this->section("page_specific_js") ?>
</body>

</html>