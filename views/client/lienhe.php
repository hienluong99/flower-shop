<?php

session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

?>
<?php $this->layout("layouts/defaultClient", ["title" => "Liên hệ"]) ?>

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
                            <a style="color: #555;" href="/client">TRANG CHỦ</a> / LIÊN HỆ
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row my-5">
            <div class="col-md-7 col-12">
                <form action="contact.php" id="contactForm" method="post">
                    <div class="row mb-4">
                        <div class="col-lg-6 col-12 ">
                            <label class="mb-2 form-label" for="name"><strong>Họ tên *</strong></label>
                            <input class="form-control" style="padding: 17px 25px" name="name" placeholder="Họ tên" type="text">
                        </div>
                        <div class="col-lg-6 col-12 ">
                            <label class="mb-2" for="email"><strong>Email *</strong></label>
                            <input class="form-control" style="padding: 17px 25px" name="email" placeholder="Email" type="text">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <label class="mb-2" for="phone"><strong>SĐT *</strong></label>
                            <input class="form-control" style="padding: 17px 25px" name="phone" placeholder="SĐT " type="text">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <label class="mb-2" for="content"><strong>Nội dung nhắn gửi</strong></label>
                            <textarea class="form-control" style=" width: 100%;" rows="5" name="content" placeholder="Nội dung " type="text">
                                </textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary" style="background-color: rgb(250, 134, 155); border-color:transparent;" type="submit">Send</button>
                </form>
            </div>
            <div class="col-md-5 col-12">
                <div class="contact-right text-center " style="font-size:14px; font-weight:400">
                    <hr>
                    <ul class="list-unstyled">
                        <li>
                            <div class="contact-icon my-3"><strong style="color:rgb(250, 134, 155)">SỐ DIỆN
                                    THOẠI</strong></div>
                            <p>0359882746</p>
                            <p>0359882746</p>
                        </li>
                        <hr>
                        <li>
                            <div class="contact-icon my-3"><strong style="color:rgb(250, 134, 155)">EMAIL</strong>
                            </div>
                            <p>luongminhhien2109@gmail.com</p>
                        </li>
                    </ul>
                </div>
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