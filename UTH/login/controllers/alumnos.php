<?php
    class Alumnos extends SesionController
    {
        function __construct()
        {
            parent::__construct();
            error_log('alumnos::costruct-inicio de login');
        }

        function render()
        {
            error_log('alumnos::render-inicio de login');
            $this->view->render('alumnos/index');
        }

       
    }
    ?>