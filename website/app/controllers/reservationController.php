<?php

class reservationController
{
    /**
     * @throws Exception
     */
    public function index()
    {
        redirect::session();
        $client = $_SESSION['id_c'];
        $reservation = new Reservation();
        $data['reservation'] = $reservation->getResClient($client);
        View::load('users/reservation', $data);
    }

    /**
     * @throws Exception
     */
    public function add()
    {
        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';

        $ROM = new rom();
        $TYPEROM = new TypeRom();
        $reservation = new Reservation();


        extract($_POST);
        $user = $_SESSION['id_c'];
        $typeRom = $ROM->getRow($rom)['typeRom'];
        $price = $TYPEROM->getRow($typeRom)['price'];
        echo $price;

        $data = array(
            'user' => $user,
            'chambre' => $rom,
            'croisiére' => $cruise,
            'price' => $price,
            'date' => date("Y/m/d")
        );

        if ($reservation->insert($data)) {
            notif::add('Reservation added successfully', 'success');
        } else {
            notif::add('error in this reservation !', 'error');
        }

        redirect('cuirses');

    }
}