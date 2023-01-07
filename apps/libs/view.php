<?php
class view{
    
public function loadview($variable){

    $variable = str_replace('.','/',$variable);
    $path = "apps/views/$variable.php";

    if(file_exists($path)){
        require_once $path;

    }
}
}
?>