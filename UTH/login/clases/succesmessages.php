<?php

class SuccessMessages{

         const SUCCES_SIGNUP_NEWUSER="100";

        private $successList = [];
    
       
        public function __construct(){
            
            $this-> successList=[
              
                SuccessMessages::SUCCES_SIGNUP_NEWUSER=>'El usuario se a registrado correctamente fabor de revisar su correo'

            ];
    
        }
        function get($hash){
            return $this->successList[$hash];
        }
    
        function existsKey($key){
            if(array_key_exists($key, $this->successList)){
                return true;
            }else{
                return false;
            }
        }
    
}
?>