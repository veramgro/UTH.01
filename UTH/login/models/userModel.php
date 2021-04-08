<?php
require_once 'models/userModel.php';
class UserModel extends Model implements IModel{

    private $idusuario;
    private $nombre;
    private $rol;
    private $userCorreo;
    private $contraseña;

    public function __construct(){

        parent::__construct();
      //  $this->idusuario=0;
        $this->nombre='';
        $this->rol='';
        $this->userCorreo='';
        $this->contraseña='';
    }
   
    public function setid($idusuario){                  $this->idusuario=$idusuario;}
    public function setnombre($nombre){                 $this->	nombre=$nombre;}
    public function setrol($rol){                       $this->	rol=$rol;}
    public function setUserCorreo($userCorreo){         $this->	userCorreo=$userCorreo;}
    public function setcontraseña($contraseña){         $this->	contraseña=$contraseña;}

    public function getidusuario (){                    return $this->idusuario; }
    public function getnombre(){                        return $this->nombre;}
    public function getrol(){                           return $this->rol;}
    public function getUserCorreo(){                    return $this->userCorreo; }
    public function getContraseña(){                    return $this->contraseña;}

    public function insert(){
        $sql = "INSERT INTO usuarios(nombre,rol,userCorreo,contraseña) 
        VALUES (:?,:rol,?,?)";
        try{
            $query = $this->prepare($sql);
            $query->execute(array($_POST['nombre'],'rol'=>$this->rol,$_POST['userCorreo']
        ,$_POST['contraseña']));
            
          
        }catch(PDOException $exs){
            echo $exs;
            return false;
        }

    }








   public function save(){
        try{
            $query = $this->prepare('INSERT INTO `usuarios`(`nombre`, `rol`, `userCorreo`, `contraseña`) 
             VALUES(:nombre,:rol,:userCorreo,:contrasena)');
            $query->execute([
                'nombre'=>$this->nombre,
                'rol'=>$this->rol,
                'userCorreo'=>$this->userCorreo,
                'contrasena'=>$this->contraseña
                ]);
                var_dump($query);
            return true;
        }catch(PDOException $e){
            error_log('USSERMODEL::save->PDOException'.$e);
            return false;
        }
    } 

    public function getAll(){
        $items = [];

        try{
            $query = $this->query('SELECT * FROM usuarios');

            while($p = $query->fetch(PDO::FETCH_ASSOC)){
                $item = new UserModel();
                $item->setId($p['id']);
                $item->setnombre($p['nombre']);
                $item->setrol($p['rol']);
                $item->setUserCorreo($p['userCorreo']);
                $item->setcontraseña($p['contraseña']);
             
                

                array_push($items, $item);
            }
            return $items;


        }catch(PDOException $e){
            error_log('USSERMODEL::getALL->PDOException'.$e);

        }
    }

    /**
     *  Gets an item
     */
    public function get($idusuario){
        try{
            $query = $this->prepare('SELECT * FROM usuarios WHERE idusuario = :idusuario');
            $query->execute([ 
                'idusuario' => $idusuario
                ]);
            $user = $query->fetch(PDO::FETCH_ASSOC);

            $this->setid($user['idusuario']);
            $this->setnombre( $user['nombre']);
            $this->setrol($user['rol']);
            $this->setUserCorreo($user['userCorreo']);
            $this->setcontraseña($user['contraseña']);
         
           
            return $this;
        }catch(PDOException $e){
            error_log('USSERMODEL::GETID ->pdoExeptiom'.$e);
            return false;
        }
    }

    public function delete($idusuario){
        try{
            $query = $this->prepare('DELETE FROM usuarios WHERE idusuario = :idusuario');
            $query->execute([ 'idusuario' => $idusuario]);
            return true;
        }catch(PDOException $e){
            error_log('USSERMODEL::delete->PDOException'.$e);
            return false;
        }
    }

    public function update(){
        try{
            $query = $this->prepare('INSERT INTO usuarios(nombre,rol,userCorreo,contraseña) 
            VALUES (:nombre,:rol,:userCorreo,:contrasena) WHERE idusuario = :idusuario');
            $query->execute([
                'idusuario'        => $this->idusuario,
                'nombre'=>$this->nombre,
                'rol'=>$this->rol,
                'userCorreo'=>$this->userCorreo,
                'contrasena'=>$this->contraseña,
                ]);
            return true;
        }catch(PDOException $e){
            echo $e;
            return false;
        }
    }

    public function exists($userCorreo){
        try{
            $query = $this->prepare('SELECT * FROM usuarios WHERE userCorreo =:userCorreo');
            $query->execute( ['userCorreo' => $userCorreo]);
            
            if($query->rowCount() > 0){
                return true;
            }else{
                return false;
            }
        }catch(PDOException $e){
            error_log('USSERMODEL::exits->PDOException'.$e);
            return false;
        }
    }
    public function comprarePaswald($contraseña,$idusuario){
        try{
            $user =$this->get($idusuario);

            return password_verify($contraseña,$user->getContraseña());

        }catch(PDOException $e){
            error_log('USSERMODEL::compare paswol->PDOException'.$e);
            return false;

        }
    }

    public function from($array){
        $this->idusuario = $array['idusuario'];
        $this->nombre = $array['nombre'];
        $this->rol = $array['rol'];
        $this->userCorreo = $array['userCorreo'];
        $this->contraseña = $array['contraseña'];
        
    }
}

?>