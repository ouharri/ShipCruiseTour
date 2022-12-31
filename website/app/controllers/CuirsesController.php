<?php

class CuirsesController
{
    /**
     * @throws Exception
     */
    public function index()
    {

        $croisiere = new Croisiere();
        $data['croisiere'] = $croisiere->getAllCroisierej();
//        echo '<pre>';
//            var_dump($data['croisiere']);
//        echo '</pre>';
//        die();

        View::load('users/Cuirses', $data);
    }
    public function detail($id)
    {
        $db = new product();
        $data['product'] = $db->getRow($id);
        View::load('jewellery/detail', $data);
    }
}