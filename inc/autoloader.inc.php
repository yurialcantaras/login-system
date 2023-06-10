<?php

spl_autoload_register("myAutoLoader");

function myAutoLoader($className){

    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if (strpos($url, 'includes') == true) {
        
        $directory = "../classes/";
        
    }else{
        
        $directory = "classes/";

    }

    $extension = ".class.php";
    $fullpath = $directory.$className.$extension;
    
    if (!file_exists($fullpath)) {
        return false;
    }

    include_once $fullpath; 

}

?>