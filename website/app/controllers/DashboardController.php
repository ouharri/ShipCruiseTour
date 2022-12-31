<?php

class DashboardController
{
    /**
     * @throws Exception
     */
    public function index()
    {
        $Navire = new Navire();
        $Port = new Port();
        $RomType = new TypeRom();
        $croisiere = new Croisiere();
        $Rom = new Rom();
        $itinery = new CruiseItinery();
//        $countries = new countries();


        $data['Navire'] = $Navire->getAllNavire();
        $data['Port'] = $Port->getAllPort();
        $data['RomType'] = $RomType->getAllTypeRom();
        $data['croisiere'] = $croisiere->getAllCroisiere();
        $data['Rom'] = $Rom->getAllRom();

        $i = 0;
        foreach ($data['Rom'] as $R) {
            $data['Rom'][$i]['typeRom'] = $RomType->getRow($R['typeRom'])['libelle'];
            $data['Rom'][$i]['navire'] = $Navire->getRow($R['navire'])['libelle'];
            $i++;
        }
        $i = 0;
        foreach ($data['croisiere'] as $c) {
            $data['croisiere'][$i]['navire'] = $Navire->getRow($c['navire'])['libelle'];
            $data['croisiere'][$i]['itinery'] = $itinery->getRow($c['id'], 'croisiére');
            $data['croisiere'][$i]['departmentPort'] = $Port->getRow($c['departmentPort'])['name'];
            $j = 0;
            foreach ($data['croisiere'][$i]['itinery'] as $it) {
                $data['croisiere'][$i]['itinery'][$j] = $Port->getRow((int)implode('', $it))['name'];
                $j++;
            }
            $i++;
        }
//        $i = 0;
//        foreach ($data['Port'] as $P) {
//            $data['Port'][$i]['countrie'] = $countries->getRow($P['id'])['libelle'];
//            $i++;
//        }

        View::load('dashboard/home', $data);
    }

    /**
     * @throws Exception
     */
    public function addCruises()
    {
        $Port = new port();
        $Navire = new Navire();
        $cruises = new Croisiere();
        $cruiseItinery = new CruiseItinery();
        $matricule = (int)($cruises->getLastId() + 1);

        if (isset($_POST['submit'])) {
            extract($_POST);
            $data = array(
                'id' => $matricule,
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
                while (isset(${"cruiseitinery" . $count}) && !empty(${"cruiseitinery" . $count})) {
                    $data = array(
                        'port' => ${"cruiseitinery" . $count},
                        'croisiére' => $matricule,
                    );
                    if (!$cruiseItinery->insert($data)) {
                        $data['error'] .= " Error adding itinery (PROT" . $count . ")";
                    }
                    $count++;
                }
                $data['success'] = "croisiére added successfully";
            } else {
                $data['error'] = "[ -- Error adding croisiére -- ]";
            }
            unset($_POST);
            header("Refresh:0");
        }

        $data['matricule'] = $matricule;
        $data['Navire'] = $Navire->getAllNavire();
        $data['Port'] = $Port->getAllPort();

        View::load('dashboard/addCruise', $data);
    }

    public function deletCruises($id)
    {
        $db = new Croisiere();
        if ($db->delete($id)) {
            $data['success'] = "Product deleted successfully";
            redirect('dashboard');
        } else {
            echo "Error";
        }
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
            );
            $db = new Navire();
            if ($db->insert($data)) {
                $data['success'] = "Product added successfully";
            } else {
                $data['error'] = "Error ";
            }
        }

        View::load('dashboard/addNavire', $data);
    }

    public function deletNavire($id)
    {
        $db = new Navire();
        if ($db->delete($id)) {
            $data['success'] = "Navire deleted successfully";
            redirect('dashboard');
        } else {
            echo "Error";
        }
    }


    public function addPort()
    {
        if (isset($_POST['submit'])) {
            extract($_POST);
            $data = array(
                'name' => $portName,
                'countrie' => $countrie,
            );
            $db = new Port();
            if ($db->insert($data)) {
                $data['success'] = "Product added successfully";
                $data['port'] = $db->getAllPort();
            } else {
                $data['error'] = "Error ";
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
            $data['success'] = "Port deleted successfully";
            redirect('dashboard');
        } else {
            echo "Error";
        }
    }


    public function addRom()
    {
        if (isset($_POST['submit'])) {
            extract($_POST);
            $data = array(
                'typeRom' => $RomType,
                'navire' => $Navire,
                'numberOfRom' => $nbrRom,
                'capacity' => $capacity,
            );
            $db = new Rom();
            if ($db->insert($data)) {
                $data['success'] = "Product added successfully";
            } else {
                $data['error'] = "Error ";
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
            $data['success'] = "Rom deleted successfully";
            redirect('dashboard');
        } else {
            echo "Error";
        }
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
            );
            $db = new TypeRom();
            if ($db->insert($data)) {
                $data['success'] = "Rom Type added successfully";
            } else {
                $data['error'] = "Error in adding Rom Type";
            }
        }
        View::load('dashboard/addtyperom', $data);
    }

    public function deletTypeRom($id)
    {
        $db = new TypeRom();
        if ($db->delete($id)) {
            $data['success'] = "Rom deleted successfully";
            redirect('dashboard');
        } else {
            echo "Error";
        }
    }


}