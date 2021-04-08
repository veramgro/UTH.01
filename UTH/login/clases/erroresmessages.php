<?php

class ErrorMessages{
    //El nombre de la cartegoria ya no existe
    
    const ERROR_SIGNUP_nuevoUsuario ="000";
    const ERROR_SIGNUP_nuevoUsuario_CAMPOSVACIOS="001";
    const ERROR_SIGNUP_nuevoUsuario_EXISTENTE ="0002";
    const ERROR_LOGIN_nuevoUsuario_Autentificarse_CAMPOSVACIOS="003";
    const ERROR_SIGNUP_nuevoUsuario_Autentificarse_CORREO_CONTRASEÑA="004";
    const ERROR_SIGNUP_nuevoUsuario_Autentificarse_SOLICITUD_FAILD="005";
   

    private $errorsList = [];

    public function __construct(){
        
        $this-> errorsList=[
      
        ErrorMessages::ERROR_SIGNUP_nuevoUsuario=>"Hubo un error al interntar prosesar la solicitud",
        ErrorMessages::ERROR_SIGNUP_nuevoUsuario_CAMPOSVACIOS=>"llenar todos los campos todos los campos porfavor ",
        ErrorMessages::ERROR_SIGNUP_nuevoUsuario_EXISTENTE=>"EsL corro ya existe fabor de ingresar ortro",
        ErrorMessages::ERROR_LOGIN_nuevoUsuario_Autentificarse_CAMPOSVACIOS=>"llenar los campos correo y contraseña",
        ErrorMessages::ERROR_SIGNUP_nuevoUsuario_Autentificarse_CORREO_CONTRASEÑA=>"nombre del correo y contraseña son incorectos",
        ErrorMessages::ERROR_SIGNUP_nuevoUsuario_Autentificarse_SOLICITUD_FAILD=>"las solicitud de ingreso fue fallida"
        ];

    }
    function get($hash){
        return $this->errorsList[$hash];
    }

    function existsKey($key){
        if(array_key_exists($key, $this->errorsList)){
            return true;
        }else{
            return false;
        }
    }
}
?>