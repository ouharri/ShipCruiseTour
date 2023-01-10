<?php

class notif
{
    public static function add($msg,$rol)
    {
        $_SESSION['notif']['msg'] = $msg;
        $_SESSION['notif']['rol'] = $rol;
    }

    public static function succes()
    {
        if (isset($_SESSION['notif'])) {
            echo "
              <script>
                  Swal.fire({
                       position: 'center',
                       icon: '" . $_SESSION['notif']['rol'] . "',
                       title: '" . $_SESSION['notif']['msg'] . "',
                       showConfirmButton: false,
                       timer: 2500
                  });
              </script>
            ";
            unset($_SESSION['notif']);
        }
    }
}