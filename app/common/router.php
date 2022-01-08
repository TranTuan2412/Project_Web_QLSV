<?php 
class Router{
    public function setRouter($path){
        switch ($path) {
            case 'login':
                require_once './app/controllers/login.php';
                break;
        
            case 'home':
                require_once './app/controllers/home.php';
                break;
            default:
                // require_once './app/views/home.php';
                break;
        }
    }
}

$path = isset($_REQUEST['router']) ? $_REQUEST['router'] : 'login';

$router = new Router();
$router-> setRouter($path);
?>