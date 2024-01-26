<?php

include 'App/Controller/AssociadoController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url){
    case '/':
        echo 'Pagina Inicial';
    break;

    case '/associado':
        AssociadoController::index();
    break;
    
    case '/associado/form':
        AssociadoController::form();
    break;

    default:
        echo "Erro 404";
    break;

}