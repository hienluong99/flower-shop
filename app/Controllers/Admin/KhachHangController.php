<?php

namespace App\Controllers\Admin;


use App\Helpers as Helper;
use App\SessionGuard as Guard;

class KhachHangController extends Controller
{
    public function __construct()
    {
        if (!Guard::isNhanVienLoggedIn()) {
            redirect('/login');
        }

        parent::__construct();
    }



    public function showKHPage()
    {

        $this->sendPage('admin/khachhang', [
            'khachhang' => Guard::getKhachhang()
        ]);
    }
}
