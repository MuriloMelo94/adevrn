<?php

use ADEVRN\App\Controller\AssociadoController;
use ADEVRN\App\Controller\AnuidadeController;

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

    case '/anuidade':
        AnuidadeController::index();
        break;

    case '/anuidade/form':
        AnuidadeController::form();
        break;

    case '/anuidade/form/store':
        AnuidadeController::store();
        break;

    case '/anuidade/edit':
        AnuidadeController::edit();
        break;

    case '/anuidade/edit/update':
        AnuidadeController::update();
        break;

    case '/anuidade/delete':
        AnuidadeController::destroy();
        break;

    default:
        echo "Erro 404";
        break;
}
