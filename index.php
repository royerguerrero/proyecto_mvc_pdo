<?php
session_start();

//obtener el controlador y el metodo
$controller = isset($_GET['controller'])? $_GET['controller']: 'index';
$method = isset($_GET['method'])? $_GET['method']: 'index';

//requerir los archivos
//La siguiente funcion remplaza los requiere once y requiere todos

spl_autoload_register(function($class){
    if(file_exists("controllers/{$class}.php")){
        require_once "controllers/{$class}.php";
    }else if(file_exists("models/{$class}.php")){
        require_once "models/{$class}.php";
    }else{
        die('The file no exists.');
    }
});

$controller = "{$controller}Controller";
$controller = new $controller();

call_user_func([$controller, $method]);

 ?>
