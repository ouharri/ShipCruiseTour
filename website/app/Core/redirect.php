<?php

class redirect
{
    public static function session(): void
    {
        if (!(isset($_SESSION['id_c'], $_SESSION['firstName_c']))) {
            redirect('login');
            exit();
        }
    }

    public static function sessionAdmin(): void
    {
        if (!(isset($_SESSION['id_c'], $_SESSION['firstName_c']) && $_SESSION['admin_c'])) {
            redirect('login');
            exit();
        }
    }
}