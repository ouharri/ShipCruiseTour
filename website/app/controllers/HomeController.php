<?php

class HomeController
{
    /**
     * @return void
     * @throws Exception
     */
    public function index()
    {

        $port = new Port();
        $user = new users();
        $navire = new Navire();
        $croisiere = new Croisiere();

        $data['port'] = $port->getAllPort();
        $data['TotalPort'] = $port->getTotal();
        $data['TotalClient'] = $user->getTotal();
        $data['TotalShip'] = $navire->getTotal();
        $data['navire'] = $navire->getAllNavire();
        $data['TotalCruises'] = $croisiere->getTotal();
        $data['croisiere'] = $croisiere->getAllCroisiereHome();

        View::load('users/Home', $data);
    }
}
