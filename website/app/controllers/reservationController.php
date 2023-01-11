<?php

class reservationController
{
    /**
     * @throws Exception
     */
    public function index()
    {
        $i = 0;
        redirect::session();
        $client = $_SESSION['id_c'];
        $reservation = new Reservation();
        $cruiseItinery = new CruiseItinery();
        $data['reservation'] = $reservation->getResClient($client);
        foreach ($data['reservation'] as $cr) {
            $data['reservation'][$i]['cruiseItinery'] = $cruiseItinery->getRowName($data['reservation'][$i]['idCruise']);
            $i++;
        }
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

    /**
     * @throws Exception
     */
    public function annuler($id)
    {
        $reservation = new Reservation();
        $dateReservation = $reservation->getDate($id);
        var_dump( $dateReservation );
        $dateNow = date("Y/m/d");
        $diff = strtotime($dateReservation) - strtotime($dateNow);
        if ($diff > 172800) {
            if ($reservation->delete($id)) {
                notif::add('Reservation deleted successfully', 'success');
            } else {
                notif::add('error in to delet reservation', 'error');
            }
        } else {
            notif::add('error in to delet reservation ( tow days )', 'error');
        }
        redirect('reservation');
    }
}