<?php

class CuirsesController
{
    /**
     * @throws Exception
     */
    public function index()
    {
        $i = 0;
        $croisiere = new Croisiere();
        $cruiseItinery = new CruiseItinery();
        $data['croisiere'] = $croisiere->getAllCroisierej();
        foreach ($data['croisiere'] as $cr) :
            $data['croisiere'][$i]['cruiseItinery'] = $cruiseItinery->getRowName($data['croisiere'][$i]['idCroisiere']);
            $i++;
        endforeach;

        echo '<pre>';
        var_dump($data['croisiere']);
        echo '</pre>';
        die();

        View::load('users/Cuirses', $data);
    }

    public function detail($id)
    {
        $db = new product();
        $data['product'] = $db->getRow($id);
        View::load('jewellery/detail', $data);
    }
}