<?php

class DashboardController
{
    protected $PreviewUrl;

    public function __construct()
    {
        redirect::sessionAdmin();
        $this->PreviewUrl = $_SERVER['HTTP_REFERER'] ?? url();
    }

    /**
     * @throws Exception
     */
    public function index()
    {
        $reservation = new Reservation();
        $port = new Port();
        $croisiere = new Croisiere();

//        $Rom = new Rom();
//        $Navire = new Navire();
//        $RomType = new TypeRom();
//        $countries = new countries();
//        $itinery = new CruiseItinery();
//
//
//        $data['Navire'] = $Navire->getAllNavire();
//        $data['Port'] = $Port->getAllPort();
//        $data['RomType'] = $RomType->getAllTypeRom();
//        $data['croisiere'] = $croisiere->getAllCroisiere();
//        $data['Rom'] = $Rom->getAllRom();
//
//        $i = 0;
//        foreach ($data['Rom'] as $R) {
//            $data['Rom'][$i]['typeRom'] = $RomType->getRow($R['typeRom'])['libelle'];
//            $data['Rom'][$i]['navire'] = $Navire->getRow($R['navire'])['libelle'];
//            $i++;
//        }
//        $i = 0;
//        foreach ($data['croisiere'] as $c) {
//            $data['croisiere'][$i]['navire'] = $Navire->getRow($c['navire'])['libelle'];
//            $data['croisiere'][$i]['itinery'] = $itinery->getRow($c['id'], 'croisiére');
//            $data['croisiere'][$i]['departmentPort'] = $Port->getRow($c['departmentPort'])['name'];
//            $j = 0;
//            foreach ($data['croisiere'][$i]['itinery'] as $it) {
//                $data['croisiere'][$i]['itinery'][$j] = $Port->getRow((int)implode('', $it))['name'];
//                $j++;
//            }
//            $i++;
//        }
//        $i = 0;
//        foreach ($data['Port'] as $P) {
//            $data['Port'][$i]['countrie'] = $countries->getRow($P['countrie'])['name'];
//            $i++;
//        }

        $data['statistic']['TotalCruises'] = $croisiere->getTotal();
        $data['statistic']['TotalPort'] = $port->getTotal();
        $data['statistic']['avr'] = $reservation->getAvgStatistic(date("m"),date("Y"));
        if((date("m")-1) == 0){
            $d = 12;
            $m = date("Y") -1;
        }else{
            $d = date("d");
            $m = date("Y");
        }
        $tmp = $reservation->getAvgStatistic($d,$m)?? 0;
        $data['years'] = range(2018, strftime("%Y", time()));
        $data['statistic']['avrP'] = ($data['statistic']['avr'] - $tmp) * 100;
        $data['statistic']['Res'] = $reservation->getStatistic(date("Y-m-d"));
        $tmp = $reservation->getStatistic(date("Y-m") . '-' . (date("d") - 1));
        $data['statistic']['%'] = ($data['statistic']['Res'] - $tmp) * 100;

        View::load('dashboard/dash', $data);
    }

    /**
     * @throws Exception
     */
    public function statistic()
    {
        $croisiere = new Croisiere();
        $data['statistic'] = $croisiere->getStatisticCroisiere($_POST['value'] ?? date('Y'));

        for ($j = 1; $j <= 12; $j++) {
            $flag = true;
            for ($i = 0; $i < count($data['statistic']); $i++) {
                if ($data['statistic'][$i]["MONTH"] == $j) $flag = false;
            }
            if ($flag) $data['statistic'][] = array(
                "COUNT" => 0,
                "MONTH" => $j
            );
        }

        header('Content-type: application/json');
        echo json_encode(array_values($data['statistic']));
    }

    public function pages()
    {
        View::load('dashboard/pages');
    }

    /**
     * @throws Exception
     */
    public function cruise()
    {
        $i = 0;
        $Port = new Port();
        $Navire = new Navire();
        $croisiere = new Croisiere();
        $itinery = new CruiseItinery();
        $data['croisiere'] = $croisiere->getAllCroisiere();
        foreach ($data['croisiere'] as $c) {
            $statisticTmp = $croisiere->getCapacity($c['id'])[0]?? NULL;
            $data['croisiere'][$i]['navire'] = $Navire->getRow($c['navire'])['libelle'];
            $data['croisiere'][$i]['itinery'] = $itinery->getRow($c['id'], 'croisiére');
            $data['croisiere'][$i]['departmentPort'] = $Port->getRow($c['departmentPort'])['name'];
            $data['croisiere'][$i]['statistic'] = $statisticTmp? round($statisticTmp['reserved'] / $statisticTmp['capacity'] * 100,2) : 0;
            $j = 0;
            foreach ($data['croisiere'][$i]['itinery'] as $it) {
                $data['croisiere'][$i]['itinery'][$j] = $Port->getRow((int)implode('', $it))['name'];
                $j++;
            }
            $i++;
        }

        View::load('dashboard/cruises', $data);
    }

    public function addCruises()
    {
        $cruises = new Croisiere();
        $cruiseItinery = new CruiseItinery();
        $matricule = (int)($cruises->getLastId() + 1);
//        $cruises->startTransaction();


        if (isset($_POST['submit'])) {
            extract($_POST);
            $data = array(
                'id' => $matricule,
                'desc' => $desc,
                'navire' => $navire,
                'numberOfNight' => $nbrnuit,
                'name' => $cruisesName,
                'departmentPort' => $departport,
                'DateOfDeparture' => $DateOfDeparture,
                'TimeOfDeparture' => $TimeOfDeparture,
                'img' => file_get_contents($_FILES['image']['tmp_name']),
            );
            if ($cruises->insert($data)) {

                $count = 1;
//                $flag= true;
//                $cruiseItinery->startTransaction();
                while (isset(${"cruiseitinery" . $count}) && !empty(${"cruiseitinery" . $count})) {
                    $data = array(
                        'port' => ${"cruiseitinery" . $count},
                        'croisiére' => $matricule,
                    );
                    if (!$cruiseItinery->insert($data)) {
//                        $flag = false;
                        $data['error'] .= " Error adding itinery (PROT" . $count . ")";
                    }
                    $count++;
                }
//                if($flag){
//                    $cruises->commit();
//                    $cruiseItinery->commit();
//                }else{
//                    $cruises->rollback();
//                    $cruiseItinery->rollback();
//                }
                notif::add('croisiére added successfully');
            } else {
                notif::add('Error adding croisiére', 'error');
            }

            unset($_POST);
            header("Refresh:0");
        }

        $Navire = new Navire();
        $Port = new port();
        $data['matricule'] = $matricule;
        $data['Navire'] = $Navire->getAllNavire();
        $data['Port'] = $Port->getAllPort();

        View::load('dashboard/addCruise', $data);
    }

    public function deletCruises($id)
    {
        $db = new Croisiere();
        if ($db->delete($id)) {
            notif::add('cruises deleted successfully');
            header('location: ' . $this->PreviewUrl);
        } else {
            notif::add('Error deleting cruise', 'error');
        }
    }

    /**
     * @throws Exception
     */
    public function Navire()
    {
        $Navire = new Navire();
        $data['Navire'] = $Navire->getAllNavire();
        View::load('dashboard/Navire', $data);
    }

    public function addNavire()
    {
        $data = [];
        if (isset($_POST['submit'])) {
            extract($_POST);
            $data = array(
                'libelle' => $navirName,
                'numberOfRom' => $nbrrom,
                'numberOfPlaces' => $nbrprsn,
                'img' => file_get_contents($_FILES['image']['tmp_name']),
            );
            $db = new Navire();
            if ($db->insert($data)) {
                notif::add('ship added successfully');
            } else {
                notif::add('Error adding ship', 'error');
            }
        }
        View::load('dashboard/addNavire', $data);
    }

    public function deletNavire($id)
    {
        $db = new Navire();
        if ($db->delete($id)) {
            notif::add('ship deleted successfully');
            header('location: ' . $this->PreviewUrl);
        } else {
            notif::add('Error deleting ship', 'error');
        }
    }

    public function Port()
    {
        $i = 0;
        $Port = new Port();
        $countries = new countries();
        $data['Port'] = $Port->getAllPort();
        foreach ($data['Port'] as $P) {
            $data['Port'][$i]['countrie'] = $countries->getRow($P['countrie'])['name'];
            $i++;
        }
        View::load('dashboard/Port', $data);
    }

    public function addPort()
    {
        if (isset($_POST['submit'])) {
            extract($_POST);
            $data = array(
                'name' => $portName,
                'countrie' => $countrie,
                'matricule' => $matricule,
                'city' => $city,
                'img' => file_get_contents($_FILES['image']['tmp_name'])
            );
            $db = new Port();
            if ($db->insert($data)) {
                notif::add('port added successfully');
                $data['port'] = $db->getAllPort();
            } else {
                notif::add('Error adding this port', 'error');
            }
        }

        $countrie = new countries();
        $data['countrie'] = $countrie->getAllCountries();
        View::load('dashboard/addPort', $data);
    }

    public function deletPort($id)
    {
        $db = new Port();
        if ($db->delete($id)) {
            notif::add('Port deleted successfully');
            header('location: ' . $this->PreviewUrl);
        } else {
            notif::add('Error deleting port', 'error');
        }
    }


    /**
     * @throws Exception
     */
    public function Rom()
    {
        $Rom = new Rom();
        $Navire = new Navire();
        $RomType = new TypeRom();
        $data['Rom'] = $Rom->getAllRom();
        $i = 0;
        foreach ($data['Rom'] as $R) {
            $data['Rom'][$i]['typeRom'] = $RomType->getRow($R['typeRom'])['libelle'];
            $data['Rom'][$i]['navire'] = $Navire->getRow($R['navire'])['libelle'];
            $i++;
        }
        View::load('dashboard/Rom', $data);
    }

    public function addRom()
    {
        if (isset($_POST['submit'])) {
            extract($_POST);
            if(isset($RomType)) {
                $data = array(
                    'typeRom' => $RomType,
                    'navire' => $Navire,
                    'numberOfRom' => $nbrRom,
                    'capacity' => $capacity,
                );
                $db = new Rom();
                if ($db->insert($data)) {
                    notif::add('Rom added successfully');
                } else {
                    notif::add('Error adding this rom', 'error');
                }
            }else{
                notif::add('Please chose rom Type !', 'error');
            }
        }

        $RomType = new TypeRom();
        $Navire = new Navire();
        $data['RomType'] = $RomType->getAllTypeRom();
        $data['Navire'] = $Navire->getAllNavire();

        View::load('dashboard/addRom', $data);
    }

    public function deletRom($id)
    {
        $db = new Rom();
        if ($db->delete($id)) {
            notif::add('Rom deleted successfully');
            header('location: ' . $this->PreviewUrl);
        } else {
            notif::add('Error deleting rom', 'error');
        }
    }

    public function getMaxRomType($id){
        $RomType = new TypeRom();
        header('Content-type: application/json');
        echo json_encode($RomType->getMaxRomType($id));
    }
    public function TypeRom()
    {
        $RomType = new TypeRom();
        $data['RomType'] = $RomType->getAllTypeRom();
        View::load('dashboard/TypeRom', $data);
    }

    public function addTypeRom()
    {
        $data = [];
        if (isset($_POST['submit'])) {
            extract($_POST);
            $data = array(
                'libelle' => $romName,
                'price' => $priceRom,
                'min' => $minprsn,
                'max' => $maxprsn,
                'img' => file_get_contents($_FILES['image']['tmp_name']),
            );
            $db = new TypeRom();
            if ($db->insert($data)) {
                notif::add('type Rom added successfully');
            } else {
                notif::add('Error adding this type rom', 'error');
            }
        }
        View::load('dashboard/addtyperom', $data);
    }

    public function deletTypeRom($id)
    {
        $db = new TypeRom();
        if ($db->delete($id)) {
            notif::add('Type Rom deleted successfully');
            header('location: ' . $this->PreviewUrl);
        } else {
            notif::add('Error deleting type rom', 'error');
        }
    }

}