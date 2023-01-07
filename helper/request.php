<?php
function request(){
    $obj = (object)['controller'=>'ProductController','method'=>'index','para'=>null];

    if(isset($_GET['url'])){

    $url = $_GET['url'];
    $url = explode('/',$url);
    // print_r($url);

    $obj->controller =($url[0])?ucfirst(strtolower($url[0])).'Controller':$obj->controller;
    $obj->method = ($url[1])?$url[1]:$obj->method;
    $obj->para = ($url[2])??$obj->para;
    
    }

    return $obj;
}
?>