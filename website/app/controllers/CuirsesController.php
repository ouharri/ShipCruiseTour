<?php

class CuirsesController
{
    /**
     * @throws Exception
     */
    public function index(): void
    {
        $i = 0;
        $rom = new Rom();
        $port = new Port();
        $navire = new Navire();
        $croisiere = new Croisiere();
        $cruiseItinery = new CruiseItinery();

        $data['port'] = $port->getAllPort();
        $data['navire'] = $navire->getAllNavire();
        $data['croisiere'] = $croisiere->getAllCroisierej();

        foreach ($data['croisiere'] as $cr) {
            $data['croisiere'][$i]['cruiseItinery'] = $cruiseItinery->getRowName($data['croisiere'][$i]['idCroisiere']);
            if (count($rom->getRomInCruise($data['croisiere'][$i]['idCroisiere'])) === 0) {
                unset($data['croisiere'][$i]);
            }
            $i++;
        }

        View::load('users/Cuirses', $data);
    }

    /**
     * @throws Exception
     */
    public function search(): void
    {
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) === 'XMLHTTPREQUEST') {
            $i = 0;
            $rom = new Rom();
            $croisiere = new Croisiere();
            $cruiseItinery = new CruiseItinery();

            switch ($_POST['action']) {
                case 'searchByPort' :
                    $data['croisiere'] = ($_POST['value'] === 'ALL') ? $croisiere->getAllCroisierej() : $croisiere->searchByPort($_POST['value']);
                    break;
                case 'searchByNavire' :
                    $data['croisiere'] = ($_POST['value'] === 'ALL') ? $croisiere->getAllCroisierej() : $croisiere->searchByNavire($_POST['value']);
                    break;
                case 'searchByMonth' :
                    $data['croisiere'] = $croisiere->searchByMonth($_POST['value']);
                    break;
            }

            foreach ($data['croisiere'] as $cr) {
                if (count($rom->getRomInCruise($data['croisiere'][$i]['idCroisiere'])) === 0) {
                    unset($data['croisiere'][$i]);
                }
                else {
                    $cruiseItineryArray = [];
                    foreach ($cruiseItinery->getRowName($data['croisiere'][$i]['idCroisiere']) as $tmp) {
                        $cruiseItineryArray[] = $tmp["NAME"] . ", " . $tmp["city"];
                    }
                    $data['croisiere'][$i]['cruiseItinery2'] = $cruiseItinery->getRowName($data['croisiere'][$i]['idCroisiere']);
                    $data['croisiere'][$i]['cruiseItinery'] = implode("<span style='color: rgb(39,109,130);'> • </span>", $cruiseItineryArray);
                    $data['croisiere'][$i]['img'] = "data:image/jpg;charset=utf8;base64," . base64_encode($data['croisiere'][$i]['img']);
                }
                $i++;
            }
            header('Content-type: application/json');
            echo json_encode(array_values($data['croisiere']), JSON_THROW_ON_ERROR);

        } else if (isset($_POST['search'])) {
            $i = 0;
            $port = new Port();
            $navire = new Navire();
            $croisiere = new Croisiere();
            $cruiseItinery = new CruiseItinery();

            $data['port'] = $port->getAllPort();
            $data['navire'] = $navire->getAllNavire();
            $data['croisiere'] = $croisiere->searchAll($_POST['Port'] ?? '0', $_POST['Navire'] ?? '0', $_POST['Month'] ?? '0');

            foreach ($data['croisiere'] as $cr) {
                $data['croisiere'][$i]['cruiseItinery'] = $cruiseItinery->getRowName($data['croisiere'][$i]['idCroisiere']);
                $i++;
            }
            View::load('users/Cuirses', $data);
        } else {
            redirect('_404.php');
        }
    }

    /**
     * @throws Exception
     */
    public function cruiseDetail(): void
    {
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) === 'XMLHTTPREQUEST') {
            $i = 0;
            $port = new Port();
            $id = $_POST['value'];
            $rom = new Rom();
            $croisiere = new Croisiere();
            $cruiseItinery = new CruiseItinery();
//            $data['port'] = $port->getAllPort();
            $data['rom'] = $rom->getRomInCruise($id);
            $data['croisiere'] = $croisiere->getDetailCruise($id)[0];
            $data['cruiseItinery'] = $cruiseItinery->getRowName($id);
            $data['ReservationUrl'] = url('reservation/add');
            foreach ($data['rom'] as $row) {
                $data['rom'][$i]['img'] = "data:image/jpg;charset=utf8;base64," . base64_encode($row['img']);
                $i++;
            }
            $data['croisiere']['img'] = "data:image/jpg;charset=utf8;base64," . base64_encode($data['croisiere']['img']);
            header('Content-type: application/json');
            echo json_encode($data, JSON_THROW_ON_ERROR);
        } else {
            echo 1;
        }
    }

    /**
     * @throws JsonException
     */
    public function checkSession():void
    {
        header('Content-type: application/json');
        if (isset($_SESSION['id_c'])) {
            echo json_encode(true, JSON_THROW_ON_ERROR);
        } else {
            echo json_encode(false, JSON_THROW_ON_ERROR);
        }
    }

}