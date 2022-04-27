<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HangHoa extends Model
{
    protected $table = 'hanghoa';
    protected $fillable = ['TenHH', 'MaLH', 'HinhAnh', 'MoTaHH', 'Gia', 'TonKho'];
    public $timestamps = false;
    protected $primaryKey = 'MSHH';

    public function loaihang()
    {
        return $this->belongsTo(hanghoa::class, 'MaLH');
    }
    public function chitiethanghoa()
    {
        return $this->hasMany(ChiTietHH::class, 'MSHH');
    }
}
