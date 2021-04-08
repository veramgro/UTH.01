<?php
    error_reporting(E_ALL); // Error/Exception engine, always use E_ALL

    ini_set('ignore_repeated_errors', TRUE); // always use TRUE

    ini_set('display_errors', FALSE); // Error/Exception display, use FALSE only in production environment or real server. Use TRUE in development environment

    ini_set('log_errors', TRUE); // Error/Exception file logging engine.

    ini_set("error_log", "php-error.log");
    error_log( "inicio de la apliccion web" );


    require_once 'libs/database.php';
    require_once 'libs/controller.php';
    require_once 'libs/view.php';
    require_once 'libs/imodel.php';
    require_once 'libs/model.php';
    require_once 'libs/app.php';
    require_once 'clases/sesion.php';

    require_once 'clases/sesionController.php';
    require_once 'clases/succesmessages.php';
    require_once 'clases/erroresmessages.php';
    require_once 'config/config.php';
    require_once 'models/userModel.php';

    
    $app =new App();
?>