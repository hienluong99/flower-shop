<?php

namespace App;

use App\Models\NhanVien;
use App\Models\KhachHang;
use App\Models\DonHang;
use App\Models\HangHoa;
use App\Models\LoaiHang;



class SessionGuard
{
    protected static $nhanvien;
    protected static $khachhang;
    protected static $donhang;

    public static function login(NhanVien $nhanvien, array $data)
    {
        $verified = false;
        $nv = NhanVien::where('Email', $data['email'])->first();
        if ($nv) {
            $isPass = NhanVien::where('Password', $data['password'])->first();
            if ($isPass) {
                $_SESSION['MSNV'] = $nhanvien->MSNV;
                $verified = true;
            }
        }
        return $verified;
    }

    public static function nhanvien()
    {
        if (!static::$nhanvien && static::isNhanVienLoggedIn()) {
            static::$nhanvien = NhanVien::find($_SESSION['MSNV']);
        }
        return static::$nhanvien;
    }

    public static function donhang()
    {

        return static::$donhang;
    }

    public static function getNhanVien()
    {
        return nhanvien::all();
    }

    public static function tiemNhanVien($maNV)
    {
        return nhanvien::where("MSNV", $maNV);
    }

    public static function logout()
    {
        static::$nhanvien = null;
        session_unset();
        session_destroy();
    }

    public static function isNhanVienLoggedIn()
    {
        return isset($_SESSION['MSNV']);
    }

    public static function isAdmin()
    {
        $admin = true;
        $nv = nhanvien::where('MSNV', $_SESSION['MSNV'])->get()->first();
        if ($nv->ChucVu == 'Ban hang') $admin = false;
        return $admin;
    }

    public static function khachhang()
    {

        return static::$khachhang;
    }

    public static function getKhachhang()
    {
        return khachhang::all();
    }

    public static function getDonHang()
    {
        return donhang::all();
    }

    public static function getLoaiHang()
    {
        return loaihang::all();
    }

    public static function hhnoibat()
    {
        $loai = LoaiHang::where('TenLH', 'Nổi bật')->get()->first();
        $hh = HangHoa::where('MaLH', $loai->MaLH)->get();

        return $hh;
    }

    public static function hhhopgo8()
    {
        $loai = LoaiHang::where('TenLH', 'Hộp gỗ')->get()->first();
        $hh = HangHoa::where('MaLH', $loai->MaLH)->get()->skip(0)->take(8);

        return $hh;
    }

    public static function hhsinhnhat8()
    {
        $loai = LoaiHang::where('TenLH', 'Sinh nhật')->get()->first();
        $hh = HangHoa::where('MaLH', $loai->MaLH)->get()->skip(0)->take(8);

        return $hh;
    }
    public static function hhbaby8()
    {
        $loai = LoaiHang::where('TenLH', 'Baby')->get()->first();
        $hh = HangHoa::where('MaLH', $loai->MaLH)->get()->skip(0)->take(8);

        return $hh;
    }

    public static function hhchiabuon4()
    {
        $loai = LoaiHang::where('TenLH', 'Chia buồn')->get()->first();
        $hh = HangHoa::where('MaLH', $loai->MaLH)->get()->skip(0)->take(4);

        return $hh;
    }

    public static function hhkhaitruong4()
    {
        $loai = LoaiHang::where('TenLH', 'Khai trương')->get()->first();
        $hh = HangHoa::where('MaLH', $loai->MaLH)->get()->skip(0)->take(4);

        return $hh;
    }
}
