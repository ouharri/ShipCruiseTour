<?php

class redirect
{
    public static function session()
    {
        if( !( isset($_SESSION['login']) && isset($_SESSION['login']) ))
        {
            redirect('login');
            exit();
        }
    }
}