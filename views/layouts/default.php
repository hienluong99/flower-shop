<?php

use App\Models\NhanVien;

$nv = "";
if (isset($_SESSION['MSNV'])) {
    $nv = NhanVien::where('MSNV', $_SESSION['MSNV'])->get()->first();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="/css/all.min.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link href="/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title> <?= $this->e($title) ?></title>

    <?= $this->section("page_specific_css") ?>
</head>

<body>
    <div class="container-fluid admin-page">
        <div class="admin-container row" style="height:100vh">

            <div class="col-xl-2 admin-rightside">
                <div class="rightside-header text-center">
                    <span class="logo"><img src="/images/logo-dark.png" alt="" srcset=""></span>
                </div>
                <div class="user-box text-center">
                    <img src="<?= $nv->HinhAnh; ?>" alt="" class="rounded-circle img-thumbnail avatar-md" srcset="">
                    <div class="user-info">
                        <p><?= $nv->HoTenNV; ?></p>
                        <p><?= $nv->ChucVu; ?></p>

                        <ul class="unstyled list-inline">
                            <li class="list-inline-item"> <i class="fa fa-info-circle" aria-hidden="true"></i></li>
                            <a href="/logout" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                <li class="list-inline-item"><i class="fa fa-sign-out" aria-hidden="true"></i></li>

                            </a>

                            <form id="logout-form" action="/logout" method="POST" style="display: none;">
                            </form>
                        </ul>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul id="side-menu" class="unstyled menu" style="list-style-type: none;">
                        <li class="menu-title">Trang chủ</li>
                        <li class="menuitem-active"><a href="/home"><i class="fas fa-chart-line"></i> <span>Tổng
                                    quan</span></a></li>
                        <li class="menu-title">Quản lý</li>
                        <li class="menuitem-active"><a href="/admin/nhanvien"><i class="fas fa-universal-access"></i> Nhân viên</li>
                        </a>
                        <li class="menuitem-active"><a href="/admin/khachhang   "><i class="fas fa-users-class"></i> Người mua</li></a>
                        <li class="menuitem-active"><a href="/admin/hanghoa"><i class="fas fa-flower-tulip"></i>Hoa</li></a>
                        <li class="menuitem-active"><a href="/admin/donhang"><i class="fas fa-box"></i>Đơn hàng</li></a>

                    </ul>
                </div>
            </div>
            <?= $this->section("page") ?>
        </div>
    </div>
    </div>


    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <?= $this->section("page_specific_js") ?>
</body>

</html>