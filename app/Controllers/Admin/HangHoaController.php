<?php

namespace App\Controllers\Admin;


use App\Models\HangHoa;
use App\Models\ChiTietHH;
use App\Models\LoaiHang;
use App\Models\NhanVien;
use App\Models\KhachHang;
use App\Helpers as Helper;
use App\SessionGuard as Guard;

class HangHoaController extends Controller
{
    public function __construct()
    {
        if (!Guard::isNhanVienLoggedIn()) {
            redirect('/login');
        }

        parent::__construct();
    }

    public function showThemHHPage()
    {
        $loaihang = LoaiHang::all();
        $this->sendPage('admin/themhanghoa', [
            'loaihang' => $loaihang
        ]);
    }

    public function showThemLHPage()
    {
        $this->sendPage('admin/themloaihang');
    }


    public function showHHPage()
    {
        $hanghoa = HangHoa::all();
        $loaihang = LoaiHang::all();
        $this->sendPage('admin/hanghoa', [
            'hanghoa' => $hanghoa,
            'loaihang' => $loaihang,
        ]);
    }
    public function create()
    {

        $data = $this->filterHangHoaData($_POST);
        $hanghoa = new HangHoa();
        $hanghoa->fill($data);
        $hanghoa->save();
        redirect('/admin/hanghoa');
    }

    public function createLH()
    {

        $data = $this->filterLoaiHoaData($_POST);
        $loaihang = new LoaiHang();
        $loaihang->fill($data);
        $loaihang->save();
        redirect('/admin/hanghoa');
    }
    protected function filterLoaiHoaData(array $data)
    {
        return [
            'MaLH' => $data['MaLH'] ?? null,
            'TenLH' => $data['TenLH'] ?? null,
        ];
    }

    protected function filterHangHoaData(array $data)
    {
        return [
            'MaLH' => $data['MaLH'] ?? null,
            'TenHH' => $data['TenHH'] ?? null,
            'HinhAnh' => ("/images/" . $data['HinhAnh']) ?? null,
            'MoTaHH' => $data['MoTaHH'],
            'Gia' => $data['Gia'] ?? 0,
            'TonKho' => $data['TonKho'] ?? 0,

        ];
    }



    public function showEditHHPage($MSHH)
    {
        $hh = HangHoa::where('MSHH', $MSHH);
        $loaihang = LoaiHang::all();
        if (!$hh) {
            $this->sendNotFound();
        }

        $data = [
            'hh' =>
            $hh->first(),
            'loaihang' => $loaihang
        ];
        $this->sendPage('admin/chinhsuahanghoa', $data);
    }

    public function showEditLHPage($MaLH)
    {
        $lh = LoaiHang::where('MaLH', $MaLH);
        if (!$lh) {
            $this->sendNotFound();
        }

        $data = [
            'lh' =>
            $lh->first()
        ];

        $this->sendPage('admin/chinhsualoaihang', $data);
    }


    public function updateHH($MSHH)
    {
        $hh = HangHoa::where('MSHH', $MSHH)->first();
        if (!$hh) {
            $this->sendNotFound();
        }

        // $data = $this->filterLoaiHoaData($_POST);

        $hh->fill($_POST);
        $hh->save();
        redirect('/admin/hanghoa');
    }

    public function updateLH($MaLH)
    {
        $lh = LoaiHang::where('MaLH', $MaLH)->first();
        if (!$lh) {
            $this->sendNotFound();
        }

        // $data = $this->filterLoaiHoaData($_POST);

        $lh->fill($_POST);
        $lh->save();
        redirect('/admin/hanghoa');
    }

    public function deleteHH($MSHH)
    {
        $hh = HangHoa::where('MSHH', $MSHH);
        if (!$hh) {
            $this->sendNotFound();
        }
        $hh->delete();
        redirect('/admin/hanghoa');
    }

    public function deleteLH($MaLH)
    {
        $lh = LoaiHang::where('MaLH', $MaLH);
        if (!$lh) {
            $this->sendNotFound();
        }
        $lh->delete();
        redirect('/admin/hanghoa');
    }
}
