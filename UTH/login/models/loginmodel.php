<?php

class LoginModel extends Model{

    function __construct(){
        parent::__construct();
    }

    public function login($userCorreo,$contraseña) {
        //isertar datos en Base de datos para
        error_log('login:: inicio');
        try{
            $sql = "SELECT * FROM usuarios WHERE userCorreo	 = :userCorreo	AND  contraseña = :contrasena";
            $query= $this->prepare($sql);
            $query->execute([
                'userCorreo' => $userCorreo,
                'contrasena' => $contraseña
            ]);
            if($query->rowCount()==1){
                $item = $query->fetch(PDO::FETCH_ASSOC);

                $user= new userModel();
                $user->from($item);
                error_log('login: user id '.$user->getidusuario());
                return $user;
                
            }else{
                return NULL;
            }



        }catch(PDOException $e){
            return NULL;
        }
    }


}
?>