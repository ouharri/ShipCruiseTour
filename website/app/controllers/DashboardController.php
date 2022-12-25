<?php

class DashboardController
{
    public function index(){
        // echo $id;
        // echo 'hahahaha : '. __CLASS__. ' and .. is' . __METHOD__;&&
        $data =[];
        View::load('dashboard/home',$data );
    }
    public function addCruises(){
        // echo $id;
        // echo 'hahahaha : '. __CLASS__. ' and .. is' . __METHOD__;&&
        $data =[];
        View::load('dashboard/addCruise',$data );
    }

}