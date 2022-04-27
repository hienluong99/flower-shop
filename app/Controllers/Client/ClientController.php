<?php

namespace App\Controllers\Client;

use App\Models\HangHoa;
use App\Helpers as Helper;
use App\SessionGuard as Guard;
use App\Models\KhachHang;
use App\Models\DonHang;
use App\Models\ChiTietHH;


class ClientController extends Controller
{
    public function __construct()
    {


        parent::__construct();
    }

    public function index()
    {
        $sp_noi_bat = Guard::hhnoibat();
        $sp_hopgo = Guard::hhhopgo8();
        $sp_sinhnhat = Guard::hhsinhnhat8();
        $sp_baby = Guard::hhbaby8();
        $sp_chiabuon = Guard::hhchiabuon4();
        $sp_khaitruong = Guard::hhkhaitruong4();
        $loai_hang = Guard::getLoaiHang();



        // print($sp_hopgo);
        $this->sendPage('client/index', [
            'sp_noi_bat' => $sp_noi_bat,
            'sp_hopgo' => $sp_hopgo,
            'sp_sinhnhat' => $sp_sinhnhat,
            'sp_baby' => $sp_baby,
            'sp_chiabuon' => $sp_chiabuon,
            'sp_khaitruong' => $sp_khaitruong,
            'loai_hang' => $loai_hang,
        ]);
    }



    public function showGTPage()
    {
        $sp_noi_bat = Guard::hhnoibat();

        $this->sendPage('client/gioithieu', [
            'sp_noi_bat' => $sp_noi_bat
        ]);
    }

    public function showLHPage()
    {
        // $sp_noi_bat = Guard::hhnoibat();

        $this->sendPage('client/lienhe');
    }


    public function showCTHHPage($MSHH)
    {
        // print "chi tiet hang hoa page";
        // $this->sendPage('client/chitiethanghoa');
        $hh = HangHoa::where('MSHH', $MSHH)->get()->first();
        $sp_tuongtu = HangHoa::where('MaLH', $hh->MaLH)->get()->skip(0)->take(4);
        // print_r($sp_tuongtu);
        $this->sendPage('client/chitiethanghoa', [
            'hh' => $hh,
            'sp_tuongtu' => $sp_tuongtu,
        ]);
    }

    public function showGHPage()
    {
        $this->sendPage('client/giohang', [
            'giohang' => $_SESSION['cart']
        ]);
    }

    public function themvaogio($MSHH)
    {
        $hh = HangHoa::where('MSHH', $MSHH)->get()->first();

        $cartArray = [
            'MSHH' => $MSHH,
            'qty' => $_POST['qty'] ? 1 : 0,
            'TenHH' => $hh->TenHH,
            'Gia' => $hh->Gia,
            'HinhAnh' => $hh->HinhAnh,
            'TamTinh' => $hh->Gia * $_POST['qty'],
            'TonKho' => $hh->TonKho,
        ];

        $kt = false;
        for ($i = 0; $i < count($_SESSION['cart']); $i++) {
            if ($_SESSION['cart'][$i]['MSHH'] == $MSHH) {
                // print 'san pham da ton tai';
                $kt = true;
                $_SESSION['cart'][$i]['qty'] += $_POST['qty'];
            }
        }

        if (!$kt) {
            $_SESSION['cart'][] = $cartArray;
        }

        header('Location: /client/giohang');
        // $this->showGHPage();
    }

    public function checkout()
    {
        session_unset();
        $this->index();
    }

    public function xoagiohang($i)
    {
        array_splice($_SESSION['cart'], $i, 1);
        header('Location: /client/giohang');
    }

    public function themsoluong($i)
    {
        if ($_SESSION['cart'][$i]['qty'] < $_SESSION['cart'][$i]['TonKho']) {

            $_SESSION['cart'][$i]['qty']++;
        }
        header('Location: /client/giohang');
    }

    public function giamsoluong($i)
    {
        if ($_SESSION['cart'][$i]['qty'] > 1) {

            $_SESSION['cart'][$i]['qty']--;
        }
        header('Location: /client/giohang');
    }

    public function thanhtoanPage()
    {
        $this->sendPage('client/thanhtoan');
    }

    public function showmuahangPage()
    {
        $hh = HangHoa::where('MSHH', $_POST['MSHH'])->get()->first();

        $cartArray = [
            'MSHH' => $_POST['MSHH'],
            'qty' => $_POST['qty'],
            'TenHH' => $hh->TenHH,
            'Gia' => $hh->Gia,
            'HinhAnh' => $hh->HinhAnh,
            'TamTinh' => $hh->Gia * $_POST['qty'],
            'TonKho' => $hh->TonKho,

        ];

        $kt = false;
        for ($i = 0; $i < count($_SESSION['cart']); $i++) {
            if ($_SESSION['cart'][$i]['MSHH'] == $_POST['MSHH']) {
                // print 'san pham da ton tai';
                $kt = true;
                $_SESSION['cart'][$i]['qty'] += $_POST['qty'];
            }
        }

        if (!$kt) {
            $_SESSION['cart'][] = $cartArray;
        }

        $_SESSION['ngaynhan'] = $_POST['ngaynhan'];
        $_SESSION['gionhan'] = $_POST['gionhan'];
        $_SESSION['loinhan'] = $_POST['loinhan'];

        $this->sendPage('client/thanhtoan', [
            'giohang' => $_SESSION['cart']
        ]);
    }

    public function thanhtoantatca()
    {
        $khachhang = new KhachHang();
        $khachhang->HoTenKH = $_POST['HoTenKH'];
        $khachhang->SoDienThoai = $_POST['SoDienThoai'];
        $khachhang->Email = $_POST['Email'];
        $khachhang->save();

        $donhang = new DonHang();
        $donhang->MSKH = $khachhang->MSKH;
        $donhang->NgayGH = $_POST['NgayGH'];
        $donhang->GioGH = $_POST['NgayGH'];
        $donhang->MaTT = 1;
        $donhang->DiaChiGH = $_POST['DiaChiGH'];
        $donhang->LoiNhan = $_POST['LoiNhan'];
        $donhang->HoTenNN = $_POST['HoTenNN'];
        $donhang->SDTNN = $_POST['SDTNN'];
        $donhang->save();

        for ($i = 0; $i < count($_SESSION['cart']); $i++) {
            $chitiethanghoa = new ChiTietHH();
            $chitiethanghoa->SoDonDH = $donhang->SoDonDH;
            $chitiethanghoa->MSHH = $_SESSION['cart'][$i]['MSHH'];
            $chitiethanghoa->SoLuong = $_SESSION['cart'][$i]['qty'];
            $chitiethanghoa->GiaDatHang = $_SESSION['cart'][$i]['Gia'];
            $chitiethanghoa->GiamGia = 0;
            $chitiethanghoa->save();

            $hanghoa = HangHoa::where('MSHH', $_SESSION['cart'][$i]['MSHH'])->get()->first();
            $hanghoa->TonKho = $hanghoa->TonKho - $_SESSION['cart'][$i]['qty'];
            $hanghoa->save();
        }
        $this->confirm();
    }

    public function confirm()
    {
        $this->sendPage('client/checkout');
        // header('Location: /client/');
    }

    public function comfirmSendmail()
    {
        unset($_SESSION['cart']);

        header('Location: /client');
    }

    public function xemhanghoa()
    {
        $hh = HangHoa::all();

        $this->sendPage('client/xemhanghoa', [
            'hh' => $hh
        ]);
    }


    public function xemhanghoaTheogia($gia)
    {

        $hh = HangHoa::all();

        if ($gia == 'duoi500') {
            $hh = HangHoa::where('Gia', '<', 500000)->get();
        }
        if ($gia == 'duoi800') {
            $hh = HangHoa::where('Gia', '>', 500000)->where('Gia', '<', 800000)->get();
        }
        if ($gia == 'duoi1200') {
            $hh = HangHoa::where('Gia', '>', 800000)->where('Gia', '<', 1200000)->get();
        }
        if ($gia == 'duoi2000') {
            $hh = HangHoa::where('Gia', '>', 1200000)->where('Gia', '<', 2000000)->get();
        }
        if ($gia == 'tren2000') {
            $hh = HangHoa::where('Gia', '>', 2000000)->get();
        }

        if ($gia == 'giamdan') {
            $hh = HangHoa::orderBy('Gia', 'DESC')->get();
        }
        if ($gia == 'tangdan') {
            $hh = HangHoa::orderBy('Gia', 'ASC')->get();
        }
        $this->sendPage('client/xemhanghoa', [
            'hh' => $hh
        ]);

        // header('Location: /client/xemhanghoa');
    }
    public function xemhanghoaTheoLoai($MaLH)
    {
        $hh = HangHoa::where('MaLH', $MaLH)->get();

        $this->sendPage('client/xemhanghoa', [
            'hh' => $hh
        ]);
    }
}
