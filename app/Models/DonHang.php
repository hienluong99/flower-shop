<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    protected $table = 'dathang';
    protected $fillable = ['MSKH', 'MSNV', 'Email', 'NgayGH', 'GioGH', 'MaTT', 'DiaChiGH', 'LoiNhan', 'HoTenNN', 'SDTNN'];
    public $timestamps = false;
    protected $primaryKey = 'SoDonDH';

    public function nhanvien()
    {
        return $this->belongsTo(NhanVien::class, 'MSNV');
    }
    public function khachhang()
    {
        return $this->belongsTo(KhachHang::class, 'MSKH');
    }
    public function chitiethanghoa()
    {
        return $this->hasMany(ChiTietHH::class, 'SoDonDH');
    }
    public function trangthai()
    {
        return $this->belongsTo(TrangThai::class, 'MaTT');
    }
}
