<?php

class controller{

    function __construct(){
        $this->view =new View();
    }

    function loadModel($model){
        $url = 'models/'.$model.'model.php';

        if(file_exists($url)){
            require_once $url;

            $modelName = $model.'Model';
            $this->model = new $modelName();
        }
    }
    function existPOST($params){
        foreach ($params as $param) {
            if(!isset($_POST[$param])){
                error_log("ExistPOST: No existe el parametro $param" );
                return false;
            }
        }
        error_log( "ExistPOST: Existen parámetros" );
        return true;
    }
    function existGET($params){
        foreach($params as $param){
            if(!isset($_GET[$param])){
                error_log('CONTROLLER::existGET => no existe el paramero'.$param);
                return false;
            }
        }
        return true;
    }
    function getGet($name){
        return $_GET[$name];
    }
    function getPost($name){
        return $_POST[$name];
    }
    function redirect($url,$mensajes){
        $data=[];
        $params='';
        foreach($mensajes as $key => $mesaje){
            array_push($data,$key.'='.$mesaje);
        }
        $params=join('&',$data);
        // ?nombre=Francisco&apellido=soto
        if($params!=''){
            $params = '?'.$params;
        }
        header('location: ' . constant('URL') . $url . $params);
    }

}
?>