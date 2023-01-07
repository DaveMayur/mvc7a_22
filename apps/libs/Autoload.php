<?php
class Autoload{
    public function __construct(){
        $req = request(); 

        $controller=$req->controller;
        $method=$req->method;
        $para = $req->para;
        $path="apps/controllers/$controller.php";
        
        if(file_exists($path)){

            require_once $path;
            $cobj=new $controller();
            $cobj->$method($para);
        }
    }
}