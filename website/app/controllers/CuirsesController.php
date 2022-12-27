<?php

class CuirsesController
{
    /**
     * @throws Exception
     */
    public function index()
    {

        $croisiere = new Croisiere();
        $data['croisiere'] = $croisiere->getAllCroisiere();

        View::load('users/Cuirses', $data);
    }
    public function detail($id)
    {
        $db = new product();
        $data['product'] = $db->getRow($id);
        View::load('jewellery/detail', $data);
    }
}