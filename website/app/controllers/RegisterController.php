<?php

class registerController
{
    public function index()
    {
        $data = [];
        View::load('connection/register', $data);
    }

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
//                $data['products'] = $db->getAllusers();
//                View::load('jewellery/admin/add', $data);
                echo "Successfully added";
            } else {
                $data['error'] = "Error ";
//                View::load('jewellery/admin/add', $data);
            }

        } else {
            View::load('jewellery/admin/add');
        }


    }
}