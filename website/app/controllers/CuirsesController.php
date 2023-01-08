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
    public function search()
    {
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) === 'XMLHTTPREQUEST') {
            $i = 0;
            $croisiere = new Croisiere();
            $cruiseItinery = new CruiseItinery();

            switch ($_POST['action']) {
                case 'searchByPort' :
                    $data['croisiere'] = $croisiere->searchByPort((int)$_POST['value']);
                    break;
                case 'searchByNavire' :
                    $data['croisiere'] = $croisiere->searchByNavire((int)$_POST['value']);
                    break;
                case 'searchByMonth' :
                    $data['croisiere'] = $croisiere->searchByMonth((int)$_POST['value']);
                    break;
            }

            foreach ($data['croisiere'] as $cr) {
                $cruiseItineryArray = [];
                foreach ($cruiseItinery->getRowName($data['croisiere'][$i]['idCroisiere']) as $tmp) {
                    $cruiseItineryArray[] = $tmp["NAME"] . ", " . $tmp["city"];
                }
                $data['croisiere'][$i]['cruiseItinery2'] = $cruiseItinery->getRowName($data['croisiere'][$i]['idCroisiere']);
                $data['croisiere'][$i]['cruiseItinery'] = implode("<span style='color: rgb(39,109,130);'> • </span>", $cruiseItineryArray);
                $data['croisiere'][$i]['img'] = "data:image/jpg;charset=utf8;base64," . base64_encode($data['croisiere'][$i]['img']);
                $i++;
            }
            header('Content-type: application/json');
            echo json_encode($data['croisiere']);

        } else if (isset($_POST['search'])) {
            $i = 0;
            $port = new Port();
            $navire = new Navire();
            $croisiere = new Croisiere();
            $cruiseItinery = new CruiseItinery();

            $data['port'] = $port->getAllPort();
            $data['navire'] = $navire->getAllNavire();
            $data['croisiere'] = $croisiere->searchAll($_POST['Port'], $_POST['Navire'], $_POST['Month']);

            foreach ($data['croisiere'] as $cr) {
                $data['croisiere'][$i]['cruiseItinery'] = $cruiseItinery->getRowName($data['croisiere'][$i]['idCroisiere']);
                $i++;
            }
            View::load('users/Cuirses', $data);
        } else {
            echo 'bb';
        }
    }

    /**
     * @throws Exception
     */
    public function cruiseDetail()
    {
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) === 'XMLHTTPREQUEST') {
            $i = 0;
            $port = new Port();
            $id = $_POST['value'];
            $navire = new Navire();
            $croisiere = new Croisiere();
            $cruiseItinery = new CruiseItinery();

//            $data['port'] = $port->getAllPort();
            $data['rom'] = $navire->getRomInCruise($id);
            $data['croisiere'] = $croisiere->getDetailCruise($id)[0];

            $data['croisiere']['img'] = "data:image/jpg;charset=utf8;base64," . base64_encode($data['croisiere']['img']);

            header('Content-type: application/json');
            echo json_encode($data);

        } else {
//
        }
    }

}