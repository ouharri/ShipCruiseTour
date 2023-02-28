<?php

class View
{
    public static function load($view_name, $view_data = []): void
    {
        $file = VIEWS . $view_name . '.php';
        if (file_exists($file)) {
            extract($view_data);
            ob_start();
            require($file);
            ob_end_flush();
        } else {
            echo "This view : " . $view_name . " dose not exist";
        }
        notif::succes();
    }
}