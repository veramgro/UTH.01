<?php
 require_once 'clases/sesion.php';
 require_once 'models/userModel.php';
class SesionController extends Controller{

    private $userSession;
    private $userCorreo;
    private $idusuario;

    private $session;
    private $sites;

    private $user;

    function __construct(){
        parent::__construct();
        $this->init();
    }
    public function getUserSession(){
        return $this->userSession;
    }

    public function getUserCorreo(){
        return $this->userCorreo;
    }

    public function getUserId(){
        return $this->idusuario;
    }




    private function init(){
        //se crea nueva sesión
        $this->session = new Session();
        //se carga el archivo json con la configuración de acceso
        $json = $this->getJSONFileConfig();
        // se asignan los sitios
        $this->sites = $json['sites'];
        // se asignan los sitios por default, los que cualquier rol tiene acceso
        $this->defaultSites = $json['default-sites'];
        // inicia el flujo de validación para determinar
        // el tipo de rol y permismos
        $this->validateSession();
    }
    private function getJSONFileConfig(){
        $string = file_get_contents("config/acces.json");
        $json = json_decode($string, true);

        return $json;
    }
    function validateSession(){
        error_log('SessionController::validateSession()');
        //Si existe la sesión
        if($this->existsSession()){
            $rol = $this->getUserSessionData()->getrol();

            error_log("sessionController::validateSession(): username:" . $this->user->getUserCorreo() . " - role: " . $this->user->getrol());
            if($this->isPublic()){
                $this->redirectDefaultSiteByRole($rol);
                error_log( "SessionController::validateSession() => sitio público, redirige al main de cada rol" );
            }else{
                if($this->isAuthorized($rol)){
                    error_log( "SessionController::validateSession() => autorizado, lo deja pasar" );
                    //si el usuario está en una página de acuerdo
                    // a sus permisos termina el flujo
                }else{
                    error_log( "SessionController::validateSession() => no autorizado, redirige al main de cada rol" );
                    // si el usuario no tiene permiso para estar en
                    // esa página lo redirije a la página de inicio
                    $this->redirectDefaultSiteByRole($rol);
                }
            }
        }else{
            //No existe ninguna sesión
            //se valida si el acceso es público o no
            if($this->isPublic()){
                error_log('SessionController::validateSession() public page');
                //la pagina es publica
                //no pasa nada
            }else{
                //la página no es pública
                //redirect al login
                error_log('SessionController::validateSession() redirect al login');
                header('location: '. constant('URL') . '');
            }
        }
    }
    function existsSession(){
        if(!$this->session->exists()) return false;
        if($this->session->getCurrentUser() == NULL) return false;

        $idusuario = $this->session->getCurrentUser();

        if($idusuario) return true;

        return false;
    }
    function getUserSessionData(){
        $idusuario = $this->session-> getCurrentUser();
        $this->user = new UserModel();
        $this->user->get($idusuario);
        error_log("sessionController::getUserSessionData(): " . $this->user->getUserCorreo());
        return $this->user;
    }
    private function isPublic(){
        $currentURL = $this->getCurrentPage();
        error_log("sessionController::isPublic(): currentURL => " . $currentURL);
        $currentURL = preg_replace( "/\?.*/", "", $currentURL); //omitir get info
        for($i = 0; $i < sizeof($this->sites); $i++){
            if($currentURL == $this->sites[$i]['site'] && $this->sites[$i]['access'] == 'public'){
                return true;
            }
        }
        return false;
    }
    private function getCurrentPage(){
        
        $actual_link = trim("$_SERVER[REQUEST_URI]");
        $url = explode('/', $actual_link);
        error_log("sessionController::getCurrentPage(): actualLink =>" . $actual_link . ", url => " . $url[2]);
        return $url[2];
    }

    private function redirectDefaultSiteByRole($rol){
        $url = '';
        for($i = 0; $i < sizeof($this->sites); $i++){
            if($this->sites[$i]['rol'] === $rol){
                $url = '/MVC_CTH/'.$this->sites[$i]['site'];
            break;
            }
         
        }
        header(constant('URL').$url);
        
    }
    private function isAuthorized($rol){
        $currentURL = $this->getCurrentPage();
        $currentURL = preg_replace( "/\?.*/", "", $currentURL); //omitir get info
       

        for($i = 0; $i < sizeof($this->sites); $i++){
            if($currentURL == $this->sites[$i]['site'] && $this->sites[$i]['rol'] === $rol){
                return true;
                break;
            }
            break;
        }
        return false;
    }
    public function initialize($user){
        error_log("sessionController::initialize(): user: " . $user->getidusuario());
        $this->session->setCurrentUser($user->getidusuario());
        $this->authorizeAccess($user->getrol());
    }
    function authorizeAccess($rol){
        error_log("sessionController::authorizeAccess(): role: $rol");
        switch($rol){
            case 'user':
                $this->redirect($this->defaultSites['user'],[]);
            break;
            case 'admin':
                $this->redirect($this->defaultSites['admin'],[]);
            
            break;
        
        }
    }
    function logout() {
        $this->session->closeSession();
    }


}

?>