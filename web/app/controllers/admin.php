<?php

class Admin extends Controller{

   

    public function Principal($data = []){
        
        $view = $this->view('admin/Principal',$data);
    }

    public function IstoricVizite($data = []){
        $view = $this->view('admin/IstoricVizite');
    }

    public function DetaliiCont($data = []){
        $view = $this->view('admin/DetaliiCont');
    }

    public function Programari($data = []){
        $view = $this->view('admin/Programari');
    }

    public function VizualizareDetinuti($data = []){
        $view = $this->view('admin/VizualizareDetinuti');
    }
}

?>