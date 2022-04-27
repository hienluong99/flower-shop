<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChiTietHH extends Model
{
    protected $table = 'chitiethanghoa';
    protected $fillable = ['SoDonDH', 'MSHH', 'SoLuong', 'GiaDatHang', 'GiamGia'];
    public $timestamps = false;

    public function donhang()
    {
        return $this->belongsTo(DonHang::class, 'SoDonDH');
    }
    public function hanghoa()
    {
        return $this->belongsTo(HangHoa::class, 'MSHH');
    }
}
