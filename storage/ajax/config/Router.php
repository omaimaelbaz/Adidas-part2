<?php

namespace Config;
class Router
{
    public $router =[];
    public function get($uri,$controller,$action)
    {
        $this->router['GET'][$uri] =[
            "controller"=>$controller,
            "action"=>$action,
        ];

    }
    public function post($uri,$controller,$action)
    {
        $this->router['POST'][$uri] =[
            "controller"=>$controller,
            "action"=>$action,
        ];

    }

    // function run methods 

    public function run ()
        {
            $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
            $methode =  $_SERVER['REQUEST_METHOD'];

            if(array_key_exists($uri,$this->router[$methode]))
            {
                $controller = $this->router[$methode][$uri]['controller'];
                $action = $this->router[$methode][$uri]['action'];
                $controller =new $controller();
                $controller->$action();
                // $this->router[$methode][$uri]();
            }
            else
        {
            echo "page not found";
        }
            
        }

}