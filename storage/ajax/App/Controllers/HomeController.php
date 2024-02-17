<?php 

namespace App\Controllers;
use App\Models\Home;
class HomeController 

{
    public function index()
    {
        
        require_once "../views/Home.php";
    }
    public function login()
    {
        require_once "../views/login.php";
    }
    public function getLastRow(){
        $data = Home::getLastRow();
        require_once "../views/afiche.php";
    }

}