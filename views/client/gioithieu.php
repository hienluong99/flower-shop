<?php

session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

?>

<?php $this->layout("layouts/defaultClient", ["title" => "Giới thiệu"]) ?>

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
                            <a style="color: #555;" href="/client/">TRANG CHỦ</a> / GIỚI
                            THIỆU VỀ HOA VIỆT
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5">
        <section class="section-bspace mt-5">
            <div class="container">
                <div>
                    <h1 style="font-weight: 500; font-family: inherit;">Giới thiệu Hoa Nét Việt</h2>
                        <h3 class="entry-title">
                            <div role="alert" class="m-2" style="color: rgb(250, 134, 155); caret-color: rgb(250, 134, 155); font-size: 18px;">
                                <div class="v-alert__wrapper">
                                    <div class="v-alert__content">
                                        Quý khách cần đặt hàng vui lòng liên hệ:
                                        <a href="tel:0934823469" class="mx-2">0934823469</a><a href="tel:0922882969" class="mx-2">0922882969</a>
                                        (Có Zalo) để được phục vụ nhanh nhất
                                    </div>
                                </div>
                            </div>
                        </h3>
                </div>
                <div class="v-card__text">
                    <p class="ql-align-center"><span style="background-color: transparent; color: rgb(0, 0, 0);"><img class="img-fluid" src="https://lh3.googleusercontent.com/jJJ_Jv1jOusY-o_zgKws2DqWdSt_Wsk6E2JATxm6RLJkO7HlhBF6kpjOvVmhhOk5AErBM0a3e35XLT2ECr1M9Js7DQBKFO7yM8jEd4QOtOMrHb_zj0XH7NmRLl8Twvf6rvKKptpn" height="188" width="602"></span></p>
                    <p class="ql-align-center"><br></p>
                    <p class="ql-align-center"><strong style="background-color: transparent; color: rgb(0, 0, 0);">VỀ HOA TƯƠI NÉT
                            VIỆT</strong></p>
                    <p class="ql-align-justify"><span style="background-color: transparent; color: rgb(0, 0, 0);">Được thành lập từ
                            tháng </span><span style="background-color: transparent; color: rgb(255, 0, 0);">8/2014</span><span style="background-color: transparent; color: rgb(0, 0, 0);">, đến nay Hoa tươi Nét Việt
                            đang trở thành sự
                            lựa chọn hàng đầu của quý khách hàng, quý doanh nghiệp mỗi khi cần đặt tặng hoa tươi
                            chúc mừng, kệ hoa sự
                            kiện trên </span><strong style="background-color: transparent; color: rgb(0, 0, 0);">phạm vi cả
                            nước</strong><span style="background-color: transparent; color: rgb(0, 0, 0);">.</span>
                    </p>
                    <p class="ql-align-justify"><strong style="background-color: transparent; color: rgb(0, 0, 0);">Điện hoa Nét Việt -
                            Thiết kế và Vận chuyển hoa tươi theo yêu cầu.&nbsp;</strong></p>
                    <p class="ql-align-justify"><span style="background-color: transparent; color: rgb(0, 0, 0);">Bạn cần một bó hoa
                            chúc mừng sinh nhật người yêu hay một kệ hoa mừng khai trương đối tác? Với Hoa tươi Nét
                            Việt, bạn chỉ cần
                            nói rõ yêu cầu của mình, phần còn lại cứ để Nét Việt lo, từ hỗ trợ tư vấn chọn mẫu, gợi
                            ý nội dung băng rôn,
                            thiệp mừng cho tới đóng gói, vận chuyển an toàn tới nơi người nhận. Đặc biệt, Điện hoa
                            Nét Việt đã có mặt
                            tại khắp các huyện, thành phố trên cả nước</span></p>
                    <p class="ql-align-center"><strong style="background-color: transparent; color: rgb(0, 0, 0);">HÀNH TRÌNH PHÁT
                            TRIỂN</strong></p>
                    <p class="ql-align-justify"><span style="background-color: transparent; color: rgb(0, 0, 0);">Từ
                            cơ sở đầu tiên tại
                            Thành phố Hồ Chí Minh, Hoa tươi Nét Việt sau hơn 7 năm phát triển đã mở rộng hệ thống
                            chi nhánh ra toàn
                            quốc, đáp ứng nhu cầu của quý khách về hoa tươi trên khắp mọi vùng miền, huyện xã trên
                            cả nước. Nhắc tới Hoa
                            tươi Nét Việt, mọi người đều có thể liên tưởng ngay tới dịch vụ giao nhận hoa tươi uy
                            tín, chuyên nghiệp và
                            tiện lợi.</span></p>
                    <h3 class="ql-align-right"><strong style="background-color: transparent; color: rgb(0, 0, 0);">SỨ MỆNH</strong></h3>
                    <p class="ql-align-justify"><span style="background-color: transparent; color: rgb(0, 0, 0);">Là
                            website cung cấp
                            dịch vụ điện hoa, quà tặng đến khắp các huyện, thị trấn, thị xã trực thuộc các tỉnh,
                            thành phố trong cả
                            nước. Với thông điệp "NỖ LỰC VÌ BẠN", Hoa tươi Nét Việt hướng đến một dịch vụ chuyên
                            nghiệp trong việc
                            truyền tải thông điệp, cảm xúc từ người tặng gửi đến người nhận trên mọi miền đất nước.
                            Mục tiêu của các sản
                            phẩm dịch vụ chúng tôi:</span></p>
                    <ul>
                        <li><span style="background-color: transparent;">Uy tín - Đúng giờ, đúng yêu cầu.</span>
                        </li>
                        <li><span style="background-color: transparent;">Khách hàng hài lòng - Phục vụ tận
                                tình.</span></li>
                        <li><span style="background-color: transparent;">Nỗ lực - Giao hoa, quà tặng tới mọi miền
                                đất nước</span></li>
                    </ul>
                    <p>&nbsp;</p>
                    <h3 class="ql-align-justify"><strong style="background-color: transparent; color: rgb(0, 0, 0);">TẦM NHÌN</strong>
                    </h3>
                    <ul>
                        <li><span style="background-color: transparent;">Hợp tác, hỗ trợ các shop hoa tươi, quà tặng
                                trên cả nước trong
                                việc cung cấp các dịch vụ trong lĩnh vực hoa tươi, quà tặng.</span></li>
                        <li><span style="background-color: transparent;">Xây dựng thành công mạng lưới điện hoa, quà
                                tặng đến tận các
                                huyện, thị trấn, thị xã thuộc các tỉnh, thành phố trong cả nước.</span></li>
                        <li><span style="background-color: transparent;">Hoàn thiện quy trình kiểm tra đơn hàng
                                (chất lượng sản phẩm và
                                chính sách giao nhận)</span></li>
                        <li><span style="background-color: transparent;">Cung cấp thành công, toàn diện điện hoa
                                trong nước và mở rộng
                                ra thị trường quốc tế.</span></li>
                        <li><span style="background-color: transparent;">Phát triển các ngành dịch vụ phụ để hỗ trợ
                                cho việc cung cấp
                                hoa và quà tặng.</span></li>
                        <li><span style="background-color: transparent;">Nghiên cứu ứng dụng Công nghệ thông tin vào
                                việc phát triển
                                ngành hoa tươi.</span></li>
                    </ul>
                    <p>&nbsp;</p>
                    <h3 class="ql-align-right"><strong style="background-color: transparent; color: rgb(0, 0, 0);">CAM KẾT</strong></h3>
                    <p class="ql-align-justify"><span style="background-color: transparent; color: rgb(0, 0, 0);">Cùng với mục tiêu phát
                            triển ngành hoa tươi Việt Nam và mang đến thị trường hoa tươi Việt Nam một đẳng cấp mới,
                            đồng thời tạo ra
                            nhiều công việc làm cho mọi người, bà con nông dân ngành hoa tươi và các ngành tiểu thủ
                            công nghiệp khác.
                            HoatuoiNetViet.com quyết tâm không ngừng học hỏi và sáng tạo để cho ra đời những tác
                            phẩm nghệ thuật cắm hoa
                            đặc sắc, ấn tượng và độc đáo nhất.</span></p>
                    <p><br></p>
                    <p class="ql-align-center"><strong style="background-color: transparent; color: rgb(0, 0, 0);">CÁC DÒNG SẢN PHẨM CỦA
                            HOA TƯƠI NÉT VIỆT</strong></p>
                    <p class="ql-align-justify">&nbsp;</p>
                    <p class="ql-align-justify"><span style="background-color: transparent; color: rgb(0, 0, 0);">Hoa từ lâu được coi là
                            thông điệp của tình yêu, là một phần quan trọng không thể thiếu của cuộc sống tinh thần
                            mỗi con người. Các
                            sản phẩm của Hoa tươi Nét Việt là cầu nối gắn kết mối thâm giao giữa những mối quan hệ
                            tình cảm cao đẹp,
                            những mối quan hệ làm ăn với nhau. Chúng tôi hi vọng rằng những sản phẩm của mình sẽ
                            mang lại những điều tốt
                            đẹp nhất cho Quý khách hàng.</span></p>
                    <p class="ql-align-justify"><span style="background-color: transparent; color: rgb(0, 0, 0);">Các sản phẩm của Hoa
                            tươi Nét Việt</span></p>
                    <ul>
                        <li><span style="background-color: transparent;">Hoa chúc mừng (Chúc mừng sinh nhật, chúc
                                mừng khai trương, chúc
                                mừng hội nghị, chúc mừng tốt nghiệp, chúc mừng kỷ niệm ngày thành lập công ty, xí
                                nghiệp...)</span></li>
                        <li><span style="background-color: transparent;">Hoa sinh nhật (Sinh nhật ông bà, cha mẹ,
                                bạn bè, người yêu, đối
                                tác làm ăn, khách hàng...)</span></li>
                        <li><span style="background-color: transparent;">Hoa cưới (Hoa cầm tay cô dâu, trang trí xe
                                hoa, trang trí tiệc
                                cưới, hoa cài áo...)</span></li>
                        <li><span style="background-color: transparent;">Hoa ngày lễ (Hoa ngày Quốc tế phụ nữ 8/3,
                                Phụ nữ Việt Nam
                                20/10, Valentine 14/2, Giang sinh...)</span></li>
                        <li><span style="background-color: transparent;">Hoa tang lễ (Vòng hoa tang lễ, kệ hoa tang
                                lễ, giỏ hoa tang lễ,
                                bó hoa tang lễ, hoa ngày thương binh liệt sỹ 27/7...)</span></li>
                        <li><span style="background-color: transparent;">Các quà tặng khác (Gấu bông, Bánh sinh
                                nhật, Trái
                                cây...)</span></li>
                    </ul>
                    <p><br></p>
                    <p class="ql-align-justify"><br></p>
                    <p><br></p>
                </div>
            </div>
        </section>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 product-related mb-3">
                    <h2 class="text-center" style="font-size: 20px; font-weight: 600; letter-spacing: 0.25px;">SẢN
                        PHẨM BÁN CHẠY</h2>
                </div>
                <hr>
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
                                                                <button><i class="fas fa-cart-plus"></i></button>
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
                                                            <h5 class="card-title"><?= $this->e($sp_noi_bat[$i]->Gia) ?>đ</h5>
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
                                                <div class="product-card" style="width: 100%; display: inline-block; border-radius: 10px;">
                                                    <img src="<?= $this->e($sp_noi_bat[$i]->HinhAnh) ?>" class="card-img-top img-fluid" alt="...">
                                                    <div class="product-effect">
                                                        <button><i class="fas fa-cart-plus"></i></button>
                                                        <button><i class="fas fa-heart"></i></button>
                                                        <button><i class="fas fa-search"></i></button>
                                                    </div>
                                                </div>
                                                <div class="card-body " style=" position: absolute; bottom: 10px; ">
                                                    <div class="rating hidden-sm col-md-6 d-inline">
                                                        <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                        </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                        </i><i class="fa fa-star"></i>
                                                    </div>
                                                    <p class="card-text"><?= $this->e($sp_noi_bat[$i]->TenHH) ?></p>
                                                    <h5 class="card-title"><?= $this->e($sp_noi_bat[$i]->Gia) ?>đ</h5>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="faq container">
        <h4>Câu hỏi thường gặp</h4>
        <div class="list-group w-100 mb-5">
            <a href="#a1" data-bs-toggle="collapse" aria-expanded="false" aria-controls="a1" class="list-group-item  bg-light" data-bs-toggle="collapse" data-bs-target="#a1" aria-expanded="false" aria-controls="a1">
                <p class="">
                    Mình đã xem website và giờ mình muốn đặt mẫu trên web thì làm thế nào?
                </p>
            </a>
            <div class="list-group-item collapse mb-2" id="a1">
                Quý khách gọi điện, chat, hoặc để lại sdt trên mẫu hoa ở ô nhập số điện thoại ! Sau đó shop hoa sẽ
                gọi lại để lấy thông
                tin đầy đủ đơn hàng:Cho em - nội dung ghi trên hoa: - thời gian giao: - địa chỉ giao hoa củ thể: -
                tên, sđt người nhận!
            </div>
            <a href="#a2" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseExample" class="list-group-item bg-light">
                <p>
                    Thanh toán tiền hoa, bánh trước khi giao, hay giao rồi mới chuyển tiền?
                </p>
            </a>
            <div class="collapse list-group-item mb-2" id="a2">
                Dạ shop nhận chuyển khoản rồi mới làm hoa, bánh nhé!
            </div>
            <a href="#a3" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseExample" class="list-group-item  bg-light">
                <p>
                    Shop làm xong gửi hình hoa thực tế lại cho mình xem không?
                </p>
            </a>
            <div class="collapse list-group-item mb-2" id="a3">
                Shop sau khi làm xong gửi hình cho quý khách xem duyệt, rồi mới tiến hành liên hệ đi giao hàng nhé!
            </div>
            <a href="#a4" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseExample" class="list-group-item bg-light">
                <p>
                    Địa chỉ shop mình ở đâu ạ?
                </p>
            </a>
            <div class="collapse list-group-item mb-2" id="a4">
                Dạ bên shop có nhiều cơ sở ạ? Nhằm tăng khả năng giao nhanh, hoa tươi ! Quý khách gửi địa chỉ cụ thể
                cần giao để shop
                gần địa chỉ giao hoa nhất tiến hành làm,! Thường bán kính chi nhánh trong vòng 5km! Hiện tại hệ
                thống shop đã có mặt 709
                quận huyện, 63 tỉnh thành trong cả nước
            </div>
            <a href="#a5" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseExample" class="list-group-item bg-light">
                <p>
                    Shop làm hoa không giống mẫu thì sao?
                </p>
            </a>
            <div class="collapse list-group-item mb-2" id="a5">
                Trong thực tế có nhiều trường hợp do mùa vụ, hoặc lý do hàng nhập về không kịp, hay đặc trưng từng
                địa phương hoa sẽ
                không đủ để thiết kế mẫu khách đã đặt! Lúc đó shop sẽ báo trước với người đặt nhằm đưa ra phương án
                tốt nhất để cắm hoa
                tươi đẹp nhất! Còn nếu khách không đồng ý, shop sẽ hoàn tiền lại 100% ngay lúc đó để khách hàng tiến
                hành dịch vụ khác
            </div>
            <a href="#a6" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseExample" class="list-group-item bg-light">
                <p>
                    Tôi đặt hoa và cần gửi thêm tiền vào phong bì thì shop có nhận không? Có thêm phí gì không?
                </p>
            </a>
            <div class="collapse list-group-item mb-2" id="a6">
                Shop nhận giao hoa kèm với phong bì! Việc này quý khách chỉ cần chuyển tiền hoa + với số tiền bỏ
                phong bì kèm theo!
                Không thu thêm phí cho việc gửi kèm tiền
            </div>
            <a href="#a7" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseExample" class="list-group-item bg-light">
                <p>
                    Shop có tính phí giao hoa không?
                </p>
            </a>
            <div class="collapse list-group-item mb-2" id="a7">
                Shop free ship nội thành, còn ngoại thành thì tùy từng khu vực mà shop sẽ trao đổi với khách
            </div>
        </div>
    </div>



</div>

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