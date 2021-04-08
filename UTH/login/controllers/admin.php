<?php
    class Admin extends SesionController
    {
        function __construct()
        {
            parent::__construct();
            error_log('admin::costruct-inicio de login');
        }

        function render()
        {
            
            $this->view->render('admin/index');
        }

        
    }
    ?>