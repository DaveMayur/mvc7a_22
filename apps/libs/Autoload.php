<?php
class Autoload{
    public function __construct(){
        $controller="UserController";
        $method="Create";
        $path="apps/controllers/$controller.php";
        if(file_exists($path)){
            require_once $path;
            $cobj=new $controller();
            $cobj->$method();
        }
    }
}