<?php

namespace App\Controllers\Admin;


use App\Models\NhanVien;
use App\Helpers as Helper;
use App\SessionGuard as Guard;

class NhanVienController extends Controller
{
    public function __construct()
    {
        if (!Guard::isNhanVienLoggedIn()) {
            redirect('/login');
        }



        parent::__construct();
    }

    public function index()
    {
        $this->sendPage('admin/home', [
            'nhanvien' => Guard::getNhanVien()
        ]);
    }



    public function showThemNVPage()
    {
        // $this->sendPage('admin/themnhanvien', [
        //     'errors' => session_get_once('errors'),
        //     'old' => $this->getSavedFormValues()
        // ]);
        $this->sendPage('admin/themnhanvien');
    }

    public function showNVPage()
    {
        if (!Guard::isAdmin()) {
            echo '<script language="javascript">';
            echo 'alert("Bạn không có quyền vào trang này!")';
            echo '</script>';
            $this->index();
        }
        $this->sendPage('admin/nhanvien', [
            'nhanvien' => Guard::getNhanVien()
        ]);
    }
    public function create()
    {
        if (!Guard::isAdmin()) {
            echo '<script language="javascript">';
            echo 'alert("Bạn không có quyền vào trang này!")';
            echo '</script>';
            $this->index();
        }
        $nv = NhanVien::where('Email', $_POST['Email'])->get()->first();
        if ($nv) {
            $_SESSION['errorsEmail'] = 'Email này đã được sử dụng!';
            $_SESSION['old'] = $_POST;
            $this->sendPage('admin/themnhanvien');
        } else {
            unset($_SESSION['errorsEmail']);
            unset($_SESSION['old']);

            $data = $this->filterNhanVienData($_POST);
            $nhanvien = new NhanVien();
            $nhanvien->fill($data);
            $nhanvien->save();
            redirect('/admin/nhanvien');
        }
    }
    protected function filterNhanVienData(array $data)
    {
        return [
            'ChucVu' => $data['ChucVu'] ?? null,
            'HoTenNV' => $data['HoTenNV'] ?? null,
            'Email' => $data['Email'] ?? null,
            'HinhAnh' => ("/images/" . $data['HinhAnh']) ?? null,
            'Password' => $data['Password'],
            'DiaChi' => $data['DiaChi'] ?? null,
            'SoDienThoai' => preg_replace('/\D+/', '', $data['SoDienThoai'])
        ];
    }

    public function showEditPage($maNV)
    {
        $nv = Guard::tiemNhanVien($maNV);
        if (!$nv) {
            $this->sendNotFound();
        }

        $data = [
            'nv' =>
            $nv->first()
        ];

        $this->sendPage('admin/chinhsuanhanvien', $data);
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

    public function delete($maNV)
    {
        $nv = Guard::tiemNhanVien($maNV);
        if (!$nv) {
            $this->sendNotFound();
        }
        $nv->delete();
        redirect('/admin/nhanvien');
    }
}
