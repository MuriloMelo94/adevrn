<?php

namespace ADEVRN\App\Controller;

use ADEVRN\App\Model\AssociadoModel;

class AssociadoController
{
    public static function index()
    {
        $title = 'Lista de Associados';

        $model = new AssociadoModel();
        $model->getAllRows();

        include 'app/view/modules/associado/ListaAssociado.php';
    }
    
    public static function form()
    {
        $title = 'Novo Associado';
        
        include 'app/view/modules/associado/FormAssociado.php';
    }

    public static function store()
    {
        $model = new AssociadoModel();
        $model->nome = $_POST['nome'];
        $model->email = $_POST['email'];
        $model->cpf = $_POST['cpf'];
        $model->data_de_filiacao = $_POST['data_de_filiacao'];

        $model->store();

        header("Location: /associado");
    }

    public static function edit()
    {
        $model = new AssociadoModel();
        $model = $model->getById( (int) $_GET['id']);

        $title = 'Editar Associado';
        
        include 'app/view/modules/associado/EditAssociado.php';
    }

    public static function update()
    {
        $model = new AssociadoModel();
        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->email = $_POST['email'];
        $model->cpf = $_POST['cpf'];
        $model->data_de_filiacao = $_POST['data_de_filiacao'];

        $model->edit();

        header("Location: /associado");
    }

    public static function destroy()
    {
        $model = new AssociadoModel();

        $model->destroy($_GET['id']);

        header("Location: /associado");
    }
    
}