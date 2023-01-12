<?php

class LoginController
{
    public function __construct(){

    }

    public function index()
    {
        $url = explode('/', trim($_SERVER['HTTP_REFERER'], '/'));
        $url = (isset($url[3])) ? $url[3] : 'Home';
        $_SESSION['previewUrl'] = $url;

        $data = [];
        View::load('connection/login', $data);
    }

    /**
     * @throws Exception
     */
    public function connect()
    {
        $url = $_SESSION['previewUrl'];
        unset( $_SESSION['previewUrl'] );

        if (isset($_POST['username']) && $_POST['password']) {
            $db = new users();
            $username = $_POST['username'];
            $password = md5($_POST['password']);

            if ($db->getAllusers($username, $password)) {
                $data['user'] = $db->getAllusers($username, $password)[0];

                $_SESSION['id_c'] = $data['user']['id'];
                $_SESSION['firstName_c'] = $data['user']['firstName'];
                $_SESSION['lastName_c'] = $data['user']['lastName'];
                $_SESSION['login_c'] = $data['user']['login'];
                $_SESSION['admin_c'] = $data['user']['is_admin'];

                if ($data['user']['is_admin']) {
                    redirect('dashboard', $data);
                } else {
                    redirect($url, $data);
                }
            } else {
                $data['error'] = "password or username is incorrect";
                view::load('connection/login', $data);
            }
        }
    }


    public function deconnect()
    {
        $url = explode('/', trim($_SERVER['HTTP_REFERER'], '/'))[3];

        unset($_SESSION['id_c']);
        unset($_SESSION['firstName_c']);
        unset($_SESSION['lastName_c']);
        unset($_SESSION['login_c']);
        unset($_SESSION['admin_c']);

        session_destroy();
        redirect($url);
    }
}