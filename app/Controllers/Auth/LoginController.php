<?php

namespace App\Controllers\Auth;

use App\Models\NhanVien;
use App\Controllers\Admin\Controller;
use App\SessionGuard as Guard;




if (!function_exists('http_accept_json')) {
    function http_accept_json()
    {
        return isset($_SERVER['HTTP_ACCEPT']) &&
            (strpos(strtolower($_SERVER['HTTP_ACCEPT']), 'application/json') !== false);
    }
}

if (!function_exists('redirect')) {
    // Chuyển hướng đến một trang khác
    function redirect($location, array $data = [])
    {
        foreach ($data as $key => $value) {
            $_SESSION[$key] = $value;
        }

        header('Location: ' . $location);
        exit();
    }
}

if (!function_exists('session_get_once')) {
    // Đọc và xóa một biến trong $_SESSION
    function session_get_once($name, $default = null)
    {
        $value = $default;
        if (isset($_SESSION[$name])) {
            $value = $_SESSION[$name];
            unset($_SESSION[$name]);
        }
        return $value;
    }
}

class LoginController extends Controller
{
    public function showLoginForm()
    {
        if (Guard::isNhanVienLoggedIn()) {
            redirect('/home');
        }

        $data = [
            'messages' => session_get_once('messages'),
            'old' => $this->getSavedFormValues(),
            'errors' => session_get_once('errors')
        ];

        $this->sendPage('admin/login');
    }

    public function login()
    {

        $errors = [];
        $user = NhanVien::where('Email', $_POST['email'])->first();
        // print_r($user_credentials);
        if (!$user) {
            // Người dùng không tồn tại...
            $errors['email'] = 'Invalid email.';
        } else if (Guard::login($user, $_POST)) {
            // Đăng nhập thành công...
            // print 'dang nhap thanh cong';
            redirect('/home');
        } else {
            // Sai mật khẩu...
            $errors['password'] = 'Invalid password.';
        }

        // // Đăng nhập không thành công: lưu giá trị trong form, trừ password
        // $this->saveFormValues($_POST, ['password']);

        if (isset($errors)) {
            // print_r($errors);
            $this->sendPage('/admin/login', ['errors' => $errors]);
            // redirect('/login', ['errors' => $errors]);
        }
    }

    public function logout()
    {
        Guard::logout();
        redirect('/login');
    }

    protected function filterUserCredentials(array $data)
    {
        return [
            'email' => $data['email'] ?? null,
            'password' => $data['password'] ?? null
        ];
    }
}
