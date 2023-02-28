<?php

class LoginController
{
    public function __construct()
    {
    }

    public function index(): void
    {
        $url = explode('/', trim($_SERVER['HTTP_REFERER'] ?? 'Home', '/'));
        $url = $url[3] ?? 'Home';
        $_SESSION['previewUrl'] = $url;

        View::load('connection/login');
    }

    /**
     * @return void
     * @throws Exception
     */
    public function connect(): void
    {
        $url = $_SESSION['previewUrl'] ?? 'Home';
        unset($_SESSION['previewUrl']);

        if (isset($_POST['username']) && $_POST['password']) {
            $db = new users();
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            if ($db->getAllusers($username, $password)) {
                $data['user'] = $db->getAllusers($username, $password);

                $_SESSION['id_c'] = $data['user']['id'];
                $_SESSION['login_c'] = $data['user']['login'];
                $_SESSION['admin_c'] = $data['user']['is_admin'];
                $_SESSION['lastName_c'] = $data['user']['lastName'];
                $_SESSION['firstName_c'] = $data['user']['firstName'];

                if ($data['user']['is_admin']) {
                    redirect('dashboard', $data);
                } else {
                    redirect($url, $data);
                }

            } else {
                $data['error'] = "password or username is incorrect";
                notif::add('password or username is incorrect', 'error');
                view::load('connection/login', $data);
            }
        }
    }


    public function deconnect(): void
    {
        $url = explode('/', trim($_SERVER['HTTP_REFERER'], '/'))[3];

        unset($_SESSION['id_c'], $_SESSION['firstName_c'], $_SESSION['lastName_c'], $_SESSION['login_c'], $_SESSION['admin_c']);

        session_destroy();
        redirect($url);
    }
}