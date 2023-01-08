<?php

class LoginController
{
    public function index()
    {
        $data = [];
        View::load('connection/login', $data);
    }

    /**
     * @throws Exception
     */
    public function connect()
    {
        if (isset($_POST['username']) && $_POST['password']) {
            $password = md5($_POST['password']);
            $username = $_POST['username'];

            $db = new users();

            if ($db->getAllusers($username, $password)) {
                $data['user'] = $db->getAllusers($username, $password)[0];

                $_SESSION['id'] = $data['user']['id'];
                $_SESSION['firstName'] = $data['user']['firstName'];
                $_SESSION['lastName'] = $data['user']['lastName'];
                $_SESSION['login'] = $data['user']['login'];
                $_SESSION['admin'] = $data['user']['is_admin'];

                if ($data['user']['is_admin']) {
                    redirect('dashboard', $data);
                } else {
                    redirect('home', $data);
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

        unset($_SESSION['id']);
        unset($_SESSION['firstName']);
        unset($_SESSION['lastName']);
        unset($_SESSION['login']);
        unset($_SESSION['admin']);
        session_destroy();

        redirect($url);
    }
}