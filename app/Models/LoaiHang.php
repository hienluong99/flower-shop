<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoaiHang extends Model
{
    protected $table = 'loaihang';
    protected $fillable = ['TenLH'];
    public $timestamps = false;
    protected $primaryKey = 'MaLH';

    public function hanghoa()
    {
        return $this->hasMany(HangHoa::class, 'MaLH');
    }
}
