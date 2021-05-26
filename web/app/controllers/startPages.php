<?php

class StartPages extends Controller{

    public function LoginPage($data = []){
        $view = $this->view('startPages/LoginPage', $data);
    }

    public function SignUpPage($data = []){
        
        $view = $this->view('startPages/SignUpPage',$data);
    }

    public function AdministratorPage($data = []){
        $view = $this->view('startPages/AdministratorPage');
    }

    public function p1($data = []){
        $view = $this->view('startPages/p1');
    }


}

?>