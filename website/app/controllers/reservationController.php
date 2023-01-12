<?php

class reservationController
{
    public function __construct(){
        redirect::session();
    }
    /**
     * @throws Exception
     */
    public function index()
    {
        $i = 0;
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
        $user = $_SESSION['id_c'];
        extract($_POST);
        $ROM = new rom();
        $TYPEROM = new TypeRom();
        $reservation = new Reservation();

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
            notif::add('Reservation added <br><br> successfully', 'success');
        } else {
            notif::add('error in this <br><br> reservation !', 'error');
        }

        redirect('cuirses');

    }

    /**
     * @throws Exception
     */
    public function annuler($id)
    {
        $reservation = new Reservation();

        $dateNow = date("Y/m/d");
        $dateReservation = $reservation->getDate($id);
        $diff = strtotime($dateReservation) - strtotime($dateNow);

        if ($diff > 172800) {

            if ($reservation->delete($id)) {
                notif::add("Reservation deleted <br><br> successfully", 'success');
            } else {
                notif::add('error in to delet reservation', 'error');
            }

        } else {
            notif::add('error in to delet reservation ( tow days )', 'error');
        }
        redirect('reservation');
    }
}