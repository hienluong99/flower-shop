<?php

namespace App\Controllers\Client;


use League\Plates\Engine;
use App\Helpers as Helper;
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


class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new Engine(ROOTDIR . 'views');
    }

    public function sendPage($page, array $data = [])
    {
        exit($this->view->render($page, $data));
    }

    // Lưu các giá trị của form được cho trong $data vào $_SESSION 
    protected function saveFormValues(array $data, array $except = [])
    {
        $form = [];
        foreach ($data as $key => $value) {
            if (!in_array($key, $except, true)) {
                $form[$key] = $value;
            }
        }
        $_SESSION['form'] = $form;
    }


    protected function getSavedFormValues()
    {

        return session_get_once('form', []);
    }

    public function sendNotFound()
    {
        http_response_code(404);
        exit($this->view->render('errors/404'));
    }

    public function comfirmSendmail()
    {
        unset($_SESSION['cart']);
    }
}
