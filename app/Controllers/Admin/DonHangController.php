<?php

namespace App\Controllers\Admin;


use App\Models\DonHang;
use App\Models\ChiTietHH;
use App\Helpers as Helper;
use App\SessionGuard as Guard;

class DonHangController extends Controller
{
    public function __construct()
    {
        if (!Guard::isNhanVienLoggedIn()) {
            redirect('/login');
        }
        parent::__construct();
    }




    public function showThemNVPage()
    {

        $this->sendPage('admin/themnhanvien');
    }

    public function showDHPage()
    {
        // $donhang = DonHang::all()->load('khachhang', 'nhanvien', 'trangthai');
        $donhang = DonHang::with('khachhang', 'nhanvien', 'trangthai')->get();

        $donhang_1 = DonHang::with('khachhang', 'nhanvien', 'trangthai')->where('MaTT', 1)->get();
        $donhang_2 = DonHang::with('khachhang', 'nhanvien', 'trangthai')->where('MaTT', 2)->get();
        $donhang_3 = DonHang::with('khachhang', 'nhanvien', 'trangthai')->where('MaTT', 3)->get();



        if (!$donhang) {
            $this->sendNotFound();
        }
        $this->sendPage('admin/donhang', [
            'donhang' => $donhang,
            'donhang1' => $donhang_1,
            'donhang2' => $donhang_2,
            'donhang3' => $donhang_3
        ]);
    }



    public function showChiTietDHPage($SoDonDh)
    {
        $donhang = DonHang::with('khachhang', 'nhanvien', 'trangthai')->where('SoDonDH', $SoDonDh)->get();
        $chitietDH = ChiTietHH::with('hanghoa', 'donhang')->where('SoDonDh', $SoDonDh)->get();;
        if (!$donhang) {
            $this->sendNotFound();
        }

        $data = [
            'donhang' =>
            $donhang->first(),
            'chitietDH' => $chitietDH,
        ];
        $this->sendPage('admin/chitietdonhang', $data);
    }

    public function update($maNV)
    {
        $nv = Guard::tiemNhanVien($maNV)->first();
        if (!$nv) {
            $this->sendNotFound();
        }

        $nv->fill($_POST);
        $nv->save();
        redirect('/admin/nhanvien');
    }

    public function duyetdon($SoDonDH)
    {
        $donhang = DonHang::where('SoDonDH', $SoDonDH)->first();
        if (!$donhang) {
            $this->sendNotFound();
        }
        $donhang->MSNV = $_SESSION['MSNV'];
        $donhang->MaTT = 2;
        $donhang->save();
        redirect('/admin/donhang');
    }

    public function huydon($SoDonDH)
    {
        $donhang = DonHang::where('SoDonDH', $SoDonDH)->first();
        if (!$donhang) {
            $this->sendNotFound();
        }
        $donhang->MSNV = $_SESSION['MSNV'];
        $donhang->MaTT = 3;
        $donhang->save();
        redirect('/admin/donhang');
    }
}
