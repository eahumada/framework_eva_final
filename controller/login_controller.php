<?php

Class login_controller {

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new stdClass();
        $this->modelo->mensaje = "";
    }

    public function inicio(){
        require_once "view/login/principal.php";
    }

    public function ingresar() {
        if(empty($_POST['inputEmail'])){
            $this->modelo->mensaje="Debe indicar email";
        } else if(empty($_POST['inputPassword'])){
            $this->modelo->mensaje="Debe indicar password";
        } else {
            $email = $_POST['inputEmail'];
            $password = $_POST['inputPassword'];
            if($email=="admin@bodegas.cl" && $password=="admin") {
                $_SESSION["email"] = $email;
                header ('Location: ?path=search');
            }
        }   
        require_once "view/login/principal.php";
    }

}
