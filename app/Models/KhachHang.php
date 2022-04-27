<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table = 'khachhang';
    protected $fillable = ['HoTenNV', 'HoTenKH', 'DiaChi', 'SoDienThoai', 'Email'];
    public $timestamps = false;
    protected $primaryKey = 'MSKH';
    public static function validate(array $data)
    {
        $errors = [];

        if (!$data['email']) {
            $errors['email'] = 'Invalid email.';
        } elseif (static::where('email', $data['email'])->count() > 0) {
            $errors['email'] = 'Email already in use.';
        }



        return $errors;
    }
    public function donhang()
    {
        return $this->hasMany(DonHang::class, 'MSKH');
    }
}
