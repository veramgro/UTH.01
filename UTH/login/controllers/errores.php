<?php

class Errores extends controller{

    function __construct(){
        parent::__construct();
        error_log('Errores::costruct-Errpres');
         $this->view->render('errores/index');
    }

 
}

?>