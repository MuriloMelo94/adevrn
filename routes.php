<?php

use ADEVRN\App\Controller\AssociadoController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {
    case '/':
        echo 'Pagina Inicial';
        break;

    case '/associado':
        AssociadoController::index();
        break;

    case '/associado/form':
        AssociadoController::form();
        break;

    case '/associado/form/store':
        AssociadoController::store();
        break;

    case '/associado/edit':
        AssociadoController::edit();
        break;

    case '/associado/edit/update':
        AssociadoController::update();
        break;

    case '/associado/delete':
        AssociadoController::destroy();
        break;

    default:
        echo "Erro 404";
        break;
}