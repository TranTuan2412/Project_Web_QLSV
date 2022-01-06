<?php 
class Router{
    public function setRouter($path){
        switch ($path) {
            case 'login':
                require_once './app/controller/login.php';
                break;
        
            case 'home':
                require_once './app/controller/home.php';
                break;

            case 'search-score':
                require_once './app/view/score_search.php';
                break;

            default:
                // require_once './app/view/home.php';
                break;
        }
    }
}

$path = isset($_REQUEST['router']) ? $_REQUEST['router'] : 'login';

$router = new Router();
$router-> setRouter($path);
?>