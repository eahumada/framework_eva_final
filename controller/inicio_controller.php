<?php
require_once "model/producto.php";

Class inicio_controller {

    private $modelo;

    public function __construct(){
        $this->modelo = new producto(
            0,"","",0,"","",0,0
        );
    }

    public function inicio(){
        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy(); 

        require_once "view/inicio/principal.php";

    }

}
