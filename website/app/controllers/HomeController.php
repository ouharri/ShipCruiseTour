<?php
class HomeController{
    public function index(){
        // echo $id;
        // echo 'hahahaha : '. __CLASS__. ' and .. is' . __METHOD__;
        $data=[];
        View::load('users/Home',$data );
    }
}

?>