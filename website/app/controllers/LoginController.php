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
        if (isset($_POST['username']) && $_POST['password'])
        {
            $password = md5($_POST['password']);
            $username = $_POST['username'];

            $db = new users();

            if ($db->getAllusers( $username, $password ) )
            {
                $data['user'] = $db->getAllusers($username, $password);
//                $_SESSION['login'] = $data['user'][0]['login'];
//                $_SESSION['name'] = $data['user'][0]['name'];
                $data['success'] = "connected Successfully";
                echo "connected Successfully";
//                redirect('admin/index',$data);
            } else
            {
                $data['error'] = "password or username is incorrect";
                echo "connected NO NO NO NO NO NO NO";
//                view::load('connection/login', $data);
            }
        }
    }



    public function deconnect()
    {
        unset($_SESSION['login']);
        unset($_SESSION['name']);
        session_destroy();
        redirect('login');
    }
}