<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require __DIR__ . '../../bootstrapp.php';



define('APPNAME', 'Shop Hoa Việt');

session_start();

$router = new \Bramus\Router\Router();



// admin routes
$router->get('/', '\App\Controllers\Admin\NhanVienController@index');
$router->get('/home', '\App\Controllers\Admin\NhanVienController@index');


//nhan vien route



//khach hang route
$router->get(
    '/admin/khachhang',
    '\App\Controllers\Admin\KhachHangController@showKHPage'
);

$router->post(
    '/khachhang/delete/(\d+)',
    '\App\Controllers\Admin\KhachHangController@delete'
);
//don hang route
$router->get(
    '/admin/donhang',
    '\App\Controllers\Admin\DonHangController@showDHPage'
);

$router->get(
    '/admin/chitietDH/(\d+)',
    '\App\Controllers\Admin\DonHangController@showChiTietDHPage'
);

$router->post(
    '/donhang/duyetdon/(\d+)',
    '\App\Controllers\Admin\DonHangController@duyetdon'
);

$router->post(
    '/donhang/huydon/(\d+)',
    '\App\Controllers\Admin\DonHangController@huydon'
);

//nhan vien route
$router->post('/admin/themnhanvien', '\App\Controllers\Admin\NhanVienController@create');

$router->post(
    '/nhanvien/(\d+)',
    '\App\Controllers\Admin\NhanVienController@update'
);
$router->get(
    '/admin/chinhsuanhanvien/(\d+)',
    '\App\Controllers\Admin\NhanVienController@showEditPage'
);

$router->post(
    '/nhanvien/delete/(\d+)',
    '\App\Controllers\Admin\NhanVienController@delete'
);

$router->get(
    '/admin/themnhanvien',
    '\App\Controllers\Admin\NhanVienController@showThemNVPage'
);



$router->get(
    '/admin/nhanvien',
    '\App\Controllers\Admin\NhanVienController@showNVPage'
);

// Hang hoa router
$router->get(
    '/admin/themhanghoa',
    '\App\Controllers\Admin\HangHoaController@showThemHHPage'
);

$router->get(
    '/admin/hanghoa',
    '\App\Controllers\Admin\HangHoaController@showHHPage'
);

$router->post('/admin/themhanghoa', '\App\Controllers\Admin\HangHoaController@create');

$router->get(
    '/admin/chinhsuahanghoa/(\d+)',
    '\App\Controllers\Admin\HangHoaController@showEditHHPage'
);

$router->post(
    '/hanghoa/(\d+)',
    '\App\Controllers\Admin\HangHoaController@updateHH'
);

$router->post(
    '/hanghoa/delete/(\d+)',
    '\App\Controllers\Admin\HangHoaController@deleteHH'
);

//loai hang router

$router->post('/admin/themloaihang', '\App\Controllers\Admin\HangHoaController@createLH');
$router->get(
    '/admin/themloaihang',
    '\App\Controllers\Admin\HangHoaController@showThemLHPage'
);
$router->post(
    '/loaihang/delete/(\d+)',
    '\App\Controllers\Admin\HangHoaController@deleteLH'
);

$router->get(
    '/admin/chinhsualoaihang/(\d+)',
    '\App\Controllers\Admin\HangHoaController@showEditLHPage'
);

$router->post(
    '/loaihang/(\d+)',
    '\App\Controllers\Admin\HangHoaController@updateLH'
);
//login router
$router->get('/login', '\App\Controllers\Auth\LoginController@showLoginForm');
$router->post('/login', '\App\Controllers\Auth\LoginController@login');
$router->post('/logout', '\App\Controllers\Auth\LoginController@logout');


// client route
$router->get('/client', '\App\Controllers\Client\ClientController@index');
$router->get('/client/gioithieu', '\App\Controllers\Client\ClientController@showGTPage');
$router->get('/client/lienhe', '\App\Controllers\Client\ClientController@showLHPage');

$router->get(
    '/client/chitiethanghoa/(\d+)',
    '\App\Controllers\Client\ClientController@showCTHHPage'
);


// clietn gio hang router
$router->get(
    '/client/giohang',
    '\App\Controllers\Client\ClientController@showGHPage'
);

$router->post(
    '/client/themvaogio/(\d+)',
    '\App\Controllers\Client\ClientController@themvaogio'
);

$router->get(
    '/client/checkout',
    '\App\Controllers\Client\ClientController@checkout'
);


$router->get(
    '/client/xoagiohang/(\d+)',
    '\App\Controllers\Client\ClientController@xoagiohang'
);


$router->get(
    '/client/themsoluong/(\d+)',
    '\App\Controllers\Client\ClientController@themsoluong'
);


$router->get(
    '/client/giamsoluong/(\d+)',
    '\App\Controllers\Client\ClientController@giamsoluong'
);

//thanh toan router
$router->get(
    '/client/thanhtoan',
    '\App\Controllers\Client\ClientController@thanhtoanPage'
);

$router->get(
    '/client/confirm',
    '\App\Controllers\Client\ClientController@confirm'
);

$router->post(
    '/muahang',
    '\App\Controllers\Client\ClientController@showmuahangPage'
);

$router->post(
    '/thanhtoantatca',
    '\App\Controllers\Client\ClientController@thanhtoantatca'
);

$router->post(
    '/confirm',
    '\App\Controllers\Client\ClientController@comfirmSendmail'
);



$router->get(
    '/client/xemhanghoa',
    '\App\Controllers\Client\ClientController@xemhanghoa'
);
$router->get(
    '/client/xemhanghoa/(\w+)',
    '\App\Controllers\Client\ClientController@xemhanghoaTheogia'
);

$router->get(
    '/client/xemhanghoatheoloai/(\d+)',
    '\App\Controllers\Client\ClientController@xemhanghoaTheoLoai'
);

//









//error message

$router->set404('\App\Controllers\Admin\Controller@sendNotFound');
$router->run();
