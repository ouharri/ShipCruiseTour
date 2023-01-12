<?php
class HomeController{
    /**
     * @throws Exception
     */
    public function index(){
        $port = new Port();
        $navire = new Navire();
        $croisiere = new Croisiere();

        $data['port'] = $port->getAllPort();
        $data['navire'] = $navire->getAllNavire();
        $data['croisiere'] = $croisiere->getAllCroisierej();

        View::load('users/Home',$data );
    }
}
