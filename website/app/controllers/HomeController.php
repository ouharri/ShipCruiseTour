<?php
class HomeController{
    /**
     * @throws Exception
     */
    public function index(){
        $port = new Port();
        $user = new users();
        $navire = new Navire();
        $croisiere = new Croisiere();

        $data['port'] = $port->getAllPort();
        $data['TotalShip'] = $navire->getTotal();
        $data['TotalPort'] = $port->getTotal();
        $data['TotalClient'] = $user->getTotal();
        $data['navire'] = $navire->getAllNavire();
        $data['TotalCruises'] = $croisiere->getTotal();
        $data['croisiere'] = $croisiere->getAllCroisiereHome();

        View::load('users/Home',$data );
    }
}
