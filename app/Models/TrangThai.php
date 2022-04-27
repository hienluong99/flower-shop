<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrangThai extends Model
{
    protected $table = 'trangthai';
    protected $fillable = ['TenTT'];
    public $timestamps = false;
    protected $primaryKey = 'MaTT';


    public function chitiethanghoa()
    {
        return $this->hasMany(DonHang::class, 'MaTT');
    }
}
