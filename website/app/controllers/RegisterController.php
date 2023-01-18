<?php

class registerController
{
    public function index()
    {
        $data = [];
        View::load('connection/register', $data);
    }

    /**
     * @throws Exception
     */
    public function connect()
    {
        if( isset($_POST['register']) )
        {
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $username = $_POST['username'];
            $pass = md5($_POST['password']);

            extract($_POST);
            $data = array(
                'firstName' => $first_name,
                'lastName' => $last_name,
                'login' => $username,
                'password' => md5($password),
                'is_admin' => 0
            );
            $db = new users();
            if ($db->insert($data))
            {
                $data['success'] = "Product added successfully";
                notif::add('account created successfully<br><br>connect now');
                view::load('connection/login');

            } else {
                $data['error'] = "Error ";
//                View::load('jewellery/admin/add', $data);
            }
        } else {
            notif::add('error in created account<br><br>try again','error');
            View::load('register');
        }
    }
}