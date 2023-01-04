<?php

class CuirsesController
{
    /**
     * @throws Exception
     */
    public function index()
    {
        $i = 0;
        $port = new Port();
        $navire = new Navire();
        $croisiere = new Croisiere();
        $cruiseItinery = new CruiseItinery();

        $data['port'] = $port->getAllPort();
        $data['navire'] = $navire->getAllNavire();
        $data['croisiere'] = $croisiere->getAllCroisierej();

        foreach ($data['croisiere'] as $cr) {
            $data['croisiere'][$i]['cruiseItinery'] = $cruiseItinery->getRowName($data['croisiere'][$i]['idCroisiere']);
            $i++;
        }

//        echo '<pre>';
//        var_dump($data['croisiere']);
//        echo '</pre>';
//        die();

        View::load('users/Cuirses', $data);
    }

    /**
     * @throws Exception
     */
    public function searchByPort()
    {
//        echo '<pre>';
//        var_dump($_POST);
//        echo '</pre>';

        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) === 'XMLHTTPREQUEST') {
            $i = 0;
            $croisiere = new Croisiere();
            $cruiseItinery = new CruiseItinery();

            $data['croisiere'] = $croisiere->searchByPort((int)$_POST['port']);
            $cruiseItineryArray = [];

            foreach ($data['croisiere'] as $cr) {

                foreach ($cruiseItinery->getRowName($data['croisiere'][$i]['idCroisiere']) as $tmp) {
                    $cruiseItineryArray[] = $tmp["NAME"] . ", " . $tmp["city"];
                }
                $data['croisiere'][$i]['cruiseItinery2'] = $cruiseItinery->getRowName($data['croisiere'][$i]['idCroisiere']);
                $data['croisiere'][$i]['cruiseItinery'] = implode( "<span style='color: rgb(39,109,130);'> • </span>" , $cruiseItineryArray );
                $data['croisiere'][$i]['img'] ="data:image/jpg;charset=utf8;base64," . base64_encode( $data['croisiere'][$i]['img'] );
                $i++;
            }
            header('Content-type: application/json');
            echo json_encode($data['croisiere']);

        } else {
            echo 'cc';
        }
    }

}