<?php
use App\Controllers\HomeController;

require_once '../vendor/autoload.php';


$route = new Config\Router();
//bach nshlo khdma nhtoh f varible 


$route->get('/', HomeController::class, "index");
$route->get('/login', HomeController::class, "login");
$route->get('/getLastRow', HomeController::class, "getLastRow");

// $route->run($uri,$methode);
$route->run();
/// super global varaible for know with mothode post or get 
// and parse bach n9smo uri dylna

