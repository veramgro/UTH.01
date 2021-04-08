<?php
/**implementar el  controladorm para porder registrar a los usuarios*/

require_once 'models/userModel.php';

class Signup extends sesionController{ 


    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->errorMessage="";
        $this-> view->render('login/signup');
       

    }
    function nuevoUsuario(){
       if($this->existPOST(['nombre','correo','contraseña'])){
        $nombre = $this->getPost('nombre');   
        $userCorreo= $this->getPost('correo');
        $contraseña= $this->getPost('contraseña');

    if($nombre==''||empty($nombre)||$userCorreo==''||empty($userCorreo)
    ||$contraseña==''||empty($contraseña)){

    $this->redirect('signup',['error'=>ErrorMessages::ERROR_SIGNUP_nuevoUsuario_CAMPOSVACIOS]);
    }
        $user =new userModel();
        $user->setnombre($nombre);
        $user->setUserCorreo($userCorreo);
        $user->setcontraseña($contraseña);
        $user->setrol('user');
   
    if($user->exists($userCorreo)){
        $this->redirect('signup',['error'=>ErrorMessages::ERROR_SIGNUP_nuevoUsuario_CAMPOSVACIOS]);
       
    }else if ($user->save()) {
    
       $this->redirect('', ['success' => SuccessMessages::SUCCES_SIGNUP_NEWUSER]);
    }else{
        $this->redirect('signup',['error'=>ErrorMessages::ERROR_SIGNUP_nuevoUsuario]);

    }

    }else{
           $this->redirect('signup',['error'=>ErrorMessages::ERROR_SIGNUP_nuevoUsuario_EXISTENTE]);
       }
 
    }

}
?>