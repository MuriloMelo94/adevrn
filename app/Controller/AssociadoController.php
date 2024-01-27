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

}