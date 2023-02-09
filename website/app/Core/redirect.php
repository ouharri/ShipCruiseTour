<?php

class redirect
{
    public static function session()
    {
        if (!(isset($_SESSION['id_c']) && isset($_SESSION['firstName_c']))) {
            redirect('login');
            exit();
        }
    }

    public static function sessionAdmin()
    {
        if (!(isset($_SESSION['id_c']) && isset($_SESSION['firstName_c']) && $_SESSION['admin_c'])) {
            redirect('login');
            exit();
        }
    }
}