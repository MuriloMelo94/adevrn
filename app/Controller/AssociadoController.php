<?php

class AssociadoController
{
    public static function index()
    {
        $title = 'Lista de Associados';

        include 'app/Model/AssociadoModel.php';

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
        include 'app/Model/AssociadoModel.php';

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
        include 'app/Model/AssociadoModel.php';

        $model = new AssociadoModel();
        $model = $model->getById( (int) $_GET['id']);

        $title = 'Editar Associado';
        
        include 'app/view/modules/associado/EditAssociado.php';
    }

    public static function update()
    {
        include 'app/Model/AssociadoModel.php';

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

    }
    
}