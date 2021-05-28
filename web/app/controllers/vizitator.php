<?php

class Vizitator extends Controller{

    public function index1($data = []){
        $view = $this->view('vizitator/index1', $data);
    }

    public function index($data = []){
        
        $view = $this->view('vizitator/index',$data);
    }

    public function istoric($data = []){
        $view = $this->view('vizitator/istoric');
    }

    public function viziteaza($data = []){
        $view = $this->view('vizitator/viziteaza');
    }

    public function cauta($data = []){
        $view = $this->view('vizitator/cauta', $data);
    }

    public function despre($data = []){
        $view = $this->view('vizitator/despre');
    }

    public function profil($data = []){
        require_once __DIR__ . "/../models/DataBase.php";
        $data = getDetinut(4500);
        $view = $this->view('vizitator/profil', $data);
    }
}

?>